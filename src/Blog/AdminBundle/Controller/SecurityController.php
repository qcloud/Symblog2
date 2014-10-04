<?php
/**
 * Created by PhpStorm.
 * User: Shibly
 * Date: 10/4/2014
 * Time: 1:24 PM
 */

namespace Blog\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class SecurityController
 * @package Blog\AdminBundle\Controller
 */
class SecurityController extends Controller
{
    /**
     * Login
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there any


    }

} 