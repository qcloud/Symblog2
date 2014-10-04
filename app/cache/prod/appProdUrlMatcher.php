<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/hello')) {
            // blog_admin_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_default_index')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\DefaultController::indexAction',));
            }

            // blog_model_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_model_default_index')), array (  '_controller' => 'Blog\\ModelBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // blog_core_author_show
        if (0 === strpos($pathinfo, '/author') && preg_match('#^/author/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_core_author_show')), array (  '_controller' => 'Blog\\CoreBundle\\Controller\\AuthorController::showAction',));
        }

        // blog_core_post_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_core_post_index');
            }

            return array (  '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::indexAction',  '_route' => 'blog_core_post_index',);
        }

        // blog_core_post_show
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_core_post_show')), array (  '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::showAction',));
        }

        // blog_core_post_createcomment
        if (preg_match('#^/(?P<slug>[^/]++)/create\\-comment$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_blog_core_post_createcomment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_core_post_createcomment')), array (  '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::createCommentAction',));
        }
        not_blog_core_post_createcomment:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
