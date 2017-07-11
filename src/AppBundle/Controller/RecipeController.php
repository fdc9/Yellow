<?php
namespace AppBundle\Controller;


use AppBundle\Form\ImagePreparationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Recipe;
use AppBundle\Entity\Review;
use AppBundle\Entity\User;
use AppBundle\Entity\Ingredient;
use AppBundle\Entity\IngredientRecipe;
use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;

class RecipeController extends Controller
{
    /**
     * @Route("/recipe/{title}", name="rec")
	 *
     */
    public function viewRecipeAction(Request $request , $title)
    {

        $flag=TRUE;
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $recipe = $this->getDoctrine()->getRepository(Recipe::class)->findOneByTitle($title);
        $repository = $this->getDoctrine()->getRepository('AppBundle:Review');
        $arrayReview = $repository->findByRecipe($recipe);

        if($user != 'anon.') {

            $idUser = $user->getId();
            $userRecipe = $recipe->getUser();
            $idUserRecipe = $userRecipe->getId();

            if ($idUser == $idUserRecipe)
                $flag = FALSE;

            foreach ($arrayReview as $ar) {
                if ($ar->getUser()->getId() == $idUser)
                    $flag = FALSE;
            }
        }
        else {
            $flag = FALSE;
        }


        $repository2 = $this->getDoctrine()->getRepository('AppBundle:IngredientRecipe');
        $ingrendients_array = $repository2->findByRecipe($recipe);


        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $username = 'guest';
        }
        else
            $username = $user->getUsername();

        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        $form2 = $this->createForm(ImagePreparationType::class, $product);
        $form2->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $file = $product->getBrochure();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $brochuresDir = $this->container->getParameter('kernel.root_dir') . '/../web/images';
            $file->move($brochuresDir, $fileName);

            if($recipe->getImagePath() != null)
                @unlink($brochuresDir .'/'. $recipe->getImagePath());

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $product->setBrochure($fileName);

                $recipe->setImagePath($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($recipe);
            $em->flush();
        }

        if($form2->isSubmitted() && $form2->isValid()) {


            $file = $product->getBrochure();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $brochuresDir = $this->container->getParameter('kernel.root_dir') . '/../web/images';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $product->setBrochure($fileName);

            $array = $recipe->getImagePreparationPath();
            if($array == null)
                $array = array();

            array_push($array ,$fileName);
            $recipe->setImagePreparationPath($array);
             //   array_push($recipe->imagePreparationPath() ,$fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($recipe);
            $em->flush();

        }

        return $this->render('recipe_list/recipes.html.twig', [
            'flag' => $flag,
            'array'=>$arrayReview,
            'ingredient'=>$ingrendients_array,
            'recipe' => $recipe,
            'username' => $username,
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete_recipe")
     * @Method("POST")
     */
    public function deleteRecipeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $ingrec = $this->getDoctrine()->getRepository(IngredientRecipe::class)->findBy(array('recipe' => $id));

        foreach ($ingrec as $ir){
            $em->remove($ir);
            $em->flush();
        }

        $recipe = $this->getDoctrine()->getRepository(Recipe::class)->findOneById($id);
        $em->remove($recipe);
        $em->flush();

        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array(), array('title' => 'ASC'));

        return $this->redirectToRoute('recipes');
    }


    /**
     * @Route("/delete/review/{id}", name="delete_review")
     * @Method("POST")
     */
    public function deleteReviewAction(Request $request, $id)
    {
        $review = $this->getDoctrine()->getRepository(Review::class)->findOneById($id);
        $title = $review->getRecipe()->getTitle();
        $em = $this->getDoctrine()->getManager();
        $em->remove($review);
        $em->flush();
        return $this->redirectToRoute('rec', array('title' => $title));
    }





    /**
     *@Route("/user/recipe/{title}/review" , name="review")
     *@Method("POST")
     */
    public function addReviewAction(Request $request, $title)
    {
        $username = $this->get('security.token_storage')->getToken()->getUsername();
        $user = $this->getDoctrine()->getRepository(User::class)->findOneByUsername($username);
        $recipe = $this->getDoctrine()->getRepository(Recipe::class)->findOneByTitle($title);

        $review = new Review();
        $review->setText($request->get('comment'));
        $review->setVote($request->get('rating'));
        $review->setUser($user);
        $review->setCreationdate(date('d/m/Y H:i'));
        $review->setRecipe($recipe);
        $em = $this->getDoctrine()->getManager();
        $em->persist($review);
        $em->flush();

        return $this->redirectToRoute('rec', array('title' => $title));
    }
	
		 /**
     * @Route("/user/new_recipe/saved", name="save_recipe")
     * @Method("POST")
     */
	public function saveRecipeAction(Request $request)
    {
        $username = $this->get('security.token_storage')->getToken()->getUsername();
        $user = $this->getDoctrine()->getRepository(User::class)->findOneByUsername($username);

        $em = $this->getDoctrine()->getManager();

        $recipe = new Recipe();
        $recipe->setUser($user);
        $recipe->setTitle($request->get('title'));
		$recipe->setDifficulty($request->get('diff'));
		$recipe->setTime($request->get('time'));
		$recipe->setCreationdate(date('d/m/Y H:i'));
		$recipe->setCategory($request->get('categ'));
		$recipe->setDescription($request->get('descr'));
		$recipe->setImagePath("empty_gallery.png");

		//$ingredient_array = array();
		//$qt = array();
		$size = $request->get('count-hidden');


        $em->persist($recipe);
        $em->flush();

  		for($i = 0; $i < $size; $i++){

            $ing = $em->getRepository('AppBundle:Ingredient')->findOneByName($request->get('ingredient'.$i));

            $ingredient = new Ingredient();
  		    if(!$ing){

                $ingredient->setName($request->get('ingredient'.$i));
                $em->persist($ingredient);
                $em->flush();
            }
            else{
  		        $ingredient = $ing;
            }

            $ingredient_recipe = new IngredientRecipe();
            $ingredient_recipe->setIngredient($ingredient);
            $ingredient_recipe->setRecipe($recipe);
            $ingredient_recipe->setQuantity($request->get('quantity'.$i));
			//array_push($ingredient_array, $ingredient);
			//array_push($qt, $request->get('quantity'.$i));

            $em->persist($ingredient_recipe);
            $em->flush();
		}

        return $this->redirectToRoute('rec', array('title' => $request->get('title')));

    }
}