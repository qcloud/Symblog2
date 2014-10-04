<?php
/**
 * Created by PhpStorm.
 * User: Shibly
 * Date: 10/4/2014
 * Time: 1:24 PM
 */

namespace Blog\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class SecurityController
 * @package Blog\AdminBundle\Controller
 */
class SecurityController extends Controller
{
    /**
     * Login
     *
     * @return Response
     *
     * @Route("/login")
     */
    public function loginAction()
    {
        $request = new Request();
        $session = $request->getSession();

        // get the login error if there any

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render(
            'AdminBundle:Security:login.html.twig', array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error' => $error
            )
        );

    }


    /**
     * Login Check
     *
     * @Route("login_check")
     */
    public function loginCheckAction()
    {

    }

} 