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
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use AppBundle\Entity\User;
use AppBundle\Entity\Recipe;

class RegistrationController extends Controller
{
    /**
     * @Route("/guest/recipes", name="guest")
     *
     */
    public function guestAction(Request $request)
    {
        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array(), array('title' => 'ASC'));

        return $this->render('recipe_list/guest_list.html.twig', [
            'recipes' => $recipes,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/login/saved", name="security_login")
     * @Method("POST")
     */
    public function regAction(Request $request)
    {
        $user = new User();
        $user->setFullname($request->get('username'));
        $user->setUsername($request->get('username'));

        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $request->get('password'));
        $user->setPassword($encoded);
        $user->setEmail($request->get('email'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $token = new UsernamePasswordToken($user, null, 'main', array('ROLE_USER'));
        $this->container->get('security.token_storage')->setToken($token);

        $recipes = $this->getDoctrine()->getRepository(Recipe::class)->findBy(array(), array('title' => 'ASC'));

        return $this->render('recipe_list/user_list.html.twig', [
            'username' => $user->getUsername(),
            'recipes' => $recipes,
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        $helper = $this->get('security.authentication_utils');

        return $this->render('login/login.html.twig', [
            // last username entered by the user (if any)
            'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in app/config/security.yml
     *
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        $this->container->get('security.token_storage')->setToken(null);
        return $this->redirectToRoute('homepage');
    }

}