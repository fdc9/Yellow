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
use AppBundle\Entity\Review;
class NavbarController extends Controller
{


	
    /**
     * @Route("/user/new_recipe", name="new_recipe")
	 *
     */
     public function newRecipe(Request $request)
    {
    	$user = $this->get('security.token_storage')->getToken()->getUser();
		return $this->render('navbar/new_recipe.html.twig', [
			'username' => $user->getUsername(),
			'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
		]);
    }
	
	 /**
     * @Route("/user/recipes/{category}/{order_by}/{order_type}", defaults={"category": "All", "order_by": "title", "order_type": "ASC"}, name="recipes")
	 * @Method("GET")
     */
     public function recipes(Request $request, $category, $order_by, $order_type)
    {
		//['publishedAt' => 'DESC']
		
		$user = $this->get('security.token_storage')->getToken()->getUser();
		
		
		
		if($category == 'All')
			$recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array(), array($order_by => $order_type));
		else
			$recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array('category' => $category), array($order_by => $order_type));

		if($user =='anon.')
		    return $this->redirectToRoute('guest', array('recipes' => $recipes));

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

        }

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
     public function findRecipes(Request $request)
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
	public function addRecipe(Request $request)
    {
        $recipe = new Recipe();
        $recipe->setUser($this->get('security.token_storage')->getToken()->getUser()->getUsername());
        $recipe->setTitle($request->get('title'));
		$recipe->setDifficulty($request->get('diff'));
		$recipe->setTime($request->get('time'));
		$recipe->setCreationdate(date('d/m/Y H:i'));
		$recipe->setCategory($request->get('categ'));
		$recipe->setDescription($request->get('descr'));
		$ingr = array();
		$qt = array();
		$size = $request->get('count-hidden');
  		for($i = 0; $i < $size; $i++){
			array_push($ingr, $request->get('ingredient'.$i));
			array_push($qt, $request->get('quantity'.$i));
		}
		$recipe->setIngredients($ingr);
		$recipe->setQuantity($qt);
        $em = $this->getDoctrine()->getManager();
        $em->persist($recipe);
        $em->flush();
		
		 return $this->redirectToRoute('rec', array('title' => $request->get('title')));
    }
}