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
use AppBundle\Entity\User;
use AppBundle\Entity\Ingredient;

class RecipeController extends Controller
{
	    /**
     * @Route("/recipe/{title}", name="rec")
	 *
     */
    public function rec(Request $request , $title)
    {

        $flag=TRUE;
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $recipe = $this->getDoctrine()->getRepository(Recipe::class)->findOneByTitle($title);
        $repository = $this->getDoctrine()->getRepository('AppBundle:Review');
        $arrayReview = $repository->findByRecipe($recipe);
        $idUser = $user->getId();
        $userRecipe = $recipe->getUser();
        $idUserRecipe = $userRecipe->getId();
        if($idUser == $idUserRecipe )
            $flag=FALSE;

       foreach($arrayReview as $ar){
            if($ar->getUser()->getId() == $idUser)
              $flag=FALSE;
        }

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $username = 'guest';
        }
        else
         $username = $user->getUsername();



        return $this->render('recipe_list/recipes.html.twig', [
            'flag' => $flag,
            'array'=>$arrayReview,
            'recipe' => $recipe,
            'username' => $username,
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     *@Route("/user/recipe/{title}/review" , name="review")
     *@Method("POST")
     */
    public function review(Request $request, $title)
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
	public function addRecipe(Request $request)
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

		$ingredient_array = array();
		$qt = array();
		$size = $request->get('count-hidden');



  		for($i = 0; $i < $size; $i++){

            $ing = $em->getRepository('AppBundle:Ingredient')->find($request->get('ingredient'.$i));

  		    if(!$ing){
                $ingredient = new Ingredient();
                $ingredient->setName($request->get('ingredient'.$i));
                $em->persist($ingredient);
                $em->flush();
            }


			array_push($ingredient_array, $ingredient);
			array_push($qt, $request->get('quantity'.$i));
		}
        $recipe->setIngredients($ingredient_array);
		$recipe->setQuantity($qt);
        $em->persist($recipe);
        $em->flush();
		
		 return $this->redirectToRoute('rec', array('title' => $request->get('title')));
        
    }
}