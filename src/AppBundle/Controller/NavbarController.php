<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Recipe;
use AppBundle\Entity\User;
use AppBundle\Entity\Review;
use AppBundle\Entity\Ingredient;
use AppBundle\Entity\IngredientRecipe;
class NavbarController extends Controller
{
    /**
     * @Route("/user/new_recipe", name="new_recipe")
	 *
     */
     public function newRecipeAction(Request $request)
    {
    	$user = $this->get('security.token_storage')->getToken()->getUser();
		return $this->render('navbar/new_recipe.html.twig', [
			'username' => $user->getUsername(),
			'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
		]);
    }

    /**
     * @Route("/statistics", name="statistics")
     *
     */
    public function statisticsAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();


        foreach ($users as $usr) {
            $em = $this->getDoctrine()->getManager();

            $query = $em->createQuery("
              SELECT '*'
              FROM AppBundle:Recipe rec
              WHERE rec.user = :index"
            )->setParameter('index', $usr->getId());

            $c = $query->getResult();
            $usr->setCount(count($c));



            if(count($c)>0) {

                $query = $em->createQuery("
                  SELECT SUM(rec.average)
                  FROM AppBundle:Recipe rec
                  WHERE rec.user = :index"
                )->setParameter('index', $usr->getId())->getSingleScalarResult();

                $usr->setAverage($query/count($c));
            }






            $em->flush();
        }


        return $this->render('statistics/statistics.html.twig', [
          'username' => $user->getUsername(),
          'users' => $users,
        'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }



	 /**
     * @Route("/recipes/{category}/{order_by}/{order_type}", defaults={"category": "All", "order_by": "title", "order_type": "ASC"}, name="recipes")
	 * @Method("GET")
     */
     public function listRecipesAction(Request $request, $category, $order_by, $order_type)
    {
		$user = $this->get('security.token_storage')->getToken()->getUser();

		if($category == 'All')
			$recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array(), array($order_by => $order_type));
		else
			$recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array('category' => $category), array($order_by => $order_type));



		foreach ($recipes as $recp){
            $em = $this->getDoctrine()->getManager();

            $query = $em->createQuery("
              SELECT '*'
              FROM AppBundle:Review rev
              WHERE rev.recipe = :index"
            )->setParameter('index', $recp->getId());

            $c = $query->getResult();
            $recp->setCount(count($c));

            if(count($c)>0) {

                $query = $em->createQuery("
                  SELECT SUM(rev.vote)
                  FROM AppBundle:Review rev
                  WHERE rev.recipe = :index"
                )->setParameter('index', $recp->getId())->getSingleScalarResult();
                
                $recp->setAverage($query/count($c));
            }

            $em->flush();
        }


        if($user =='anon.'){
            return $this->render('recipe_list/guest_list.html.twig', [

                'recipes' => $recipes,
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            ]);
        }
            //return $this->redirectToRoute('guest', array('recipes' => $recipes));//, 'category' => $category, 'orderby' => $order_by, 'ordertype' => $order_type));

        return $this->render('recipe_list/user_list.html.twig', [
            'username' => $user->getUsername(),
            'recipes' => $recipes,
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

     /**
     * @Route("/user/findrecipes", name="find")
     * @Method("POST")
     */
     public function findRecipesAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery("
            SELECT r 
            FROM AppBundle:Recipe r 
            WHERE r.title like :search or r.description like :search"
		)->setParameter('search', '%'.$request->get('search').'%');

		$recipes = $query->getResult();
		//$recipes=null;
		
		$user = $this->get('security.token_storage')->getToken()->getUser();
		return $this->render('recipe_list/user_list.html.twig', [
			'username' => $user->getUsername(),
			'recipes' => $recipes,
			'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
		]);
    }
    
	 /**
     * @Route("/user/new_recipe/saved", name="save_recipe")
     * @Method("POST")
     */
	public function addRecipeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $recipe = new Recipe();
        $recipe->setUser($this->get('security.token_storage')->getToken()->getUser()->getUsername());
        $recipe->setTitle($request->get('title'));
		$recipe->setDifficulty($request->get('diff'));
		$recipe->setTime($request->get('time'));
		$recipe->setCreationdate(date('d/m/Y H:i'));
		$recipe->setCategory($request->get('categ'));
		$recipe->setDescription($request->get('descr'));

        $size = $request->get('count-hidden');

        for($i = 0; $i < $size; $i++){

            $ingrec = new IngredientRecipe();

            $ing = $em->getRepository('AppBundle:Ingredient')->findOneByName($request->get('ingredient'.$i));

            /*if(!$ing){
                $ingredient = new Ingredient();
                $ingredient->setName($request->get('ingredient'.$i));
                $em->persist($ingredient);
                $em->flush();
                $ingrec->setIngredient($ingredient);
            }
            else{*/
                $ingrec->setIngredient($ing);
            //}
            $ingrec->setQuantity($request->get('quantity'.$i));
            $ingrec->setRecipe($recipe);
            $em->persist($ingrec);
            $em->flush();
        }
        $em->persist($recipe);
        $em->flush();

        return $this->redirectToRoute('rec', array('title' => $request->get('title')));
    }
}