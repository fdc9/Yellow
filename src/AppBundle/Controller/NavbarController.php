<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Recipe;
use AppBundle\Entity\User;
use AppBundle\Entity\Ingredient;
use AppBundle\Entity\IngredientRecipe;
use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;


class NavbarController extends Controller
{
    /**
     * @Route("/user/new_recipe", name="new_recipe")
	 *
     */
     public function newRecipeAction()
    {
    	$user = $this->get('security.token_storage')->getToken()->getUser();
		return $this->render('navbar/new_recipe.html.twig', [
			'username' => $user->getUsername(),
			'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
		]);
    }

    /**
     * @Route("/user/profile", name="profile")
     *
     */
    public function profileAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $users = $this->getDoctrine()->getRepository(User::class)->findByUsername($user->getUsername());
        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findByUser($user);

        foreach ($users as $usr) {

            $this->updateAvg('All');

            $em = $this->getDoctrine()->getManager();

            $query = $em->createQuery("
              SELECT '*'
              FROM AppBundle:Recipe rec
              WHERE rec.user = :index"
            )->setParameter('index', $usr->getId());

            $c = $query->getResult();
            $usr->setCount(count($c));
        }

        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()){

            $file = $product->getBrochure();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $brochuresDir = $this->container->getParameter('kernel.root_dir') . '/../web/images';
            $file->move($brochuresDir, $fileName);

            if($user->getImagePath() != null)
                @unlink($brochuresDir .'/'. $user->getImagePath());

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $product->setBrochure($fileName);

            $user->setImagePath($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return $this->render('profile/profile.html.twig', [
            'username' => $user->getUsername(),
            'users' => $users,
             'recipes' => $recipes,
            'form'=> $form->createView(),
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }





    /**
     * @Route("/statistics", name="statistics")
     *
     */
    public function statisticsAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();


        foreach ($users as $usr) {

            $this->updateAvg('All');

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
     public function listRecipesAction($category, $order_by, $order_type)
    {
		$user = $this->get('security.token_storage')->getToken()->getUser();

		$this->updateAvg($category);

        if($category == 'All')
            $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array(), array($order_by => $order_type));
        else
            $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array('category' => $category), array($order_by => $order_type));

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

    public function updateAvg($category){
        if($category == 'All')
            $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array());
        else
            $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array('category' => $category));

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
            else
                $recp->setAverage(-1);

            $em->flush();
        }
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

            if(!$ing){
                $ingredient = new Ingredient();
                $ingredient->setName($request->get('ingredient'.$i));
                $em->persist($ingredient);
                $em->flush();
                $ingrec->setIngredient($ingredient);
            }
            else{
                $ingrec->setIngredient($ing);
            }
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