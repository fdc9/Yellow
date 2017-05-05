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
class RecipeController extends Controller
{
	    /**
     * @Route("/recipe/{title}", name="rec")
	 *
     */
    public function rec(Request $request , $title)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $recipe = $this->getDoctrine()->getRepository(Recipe::class)->findOneByTitle($title);
        $repository = $this->getDoctrine()->getRepository('AppBundle:Review');

        $arrayReview = $repository->findByRecipe($recipe);

        return $this->render('recipe_list/recipes.html.twig', [
            'array'=>$arrayReview,
            'recipe' => $recipe,
            'username' => $user->getUsername(),
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

        $recipe = new Recipe();
        $recipe->setUser($user);
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