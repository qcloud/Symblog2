<?php

namespace Blog\AdminBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseRegistrationController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Controller managing the registration
 *
 */
class RegistrationController extends BaseRegistrationController
{
    public function registerAction(Request $request)
    {
        if ($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            // IS_AUTHENTICATED_FULLY also implies IS_AUTHENTICATED_REMEMBERED, but IS_AUTHENTICATED_ANONYMOUSLY doesn't

            return new RedirectResponse($this->container->get('router')->generate('fos_user_profile_show', array()));
        }

        return parent::registerAction($request);
    }
}
