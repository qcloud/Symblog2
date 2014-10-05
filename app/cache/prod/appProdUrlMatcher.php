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

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/author')) {
                    // blog_admin_author_index
                    if (rtrim($pathinfo, '/') === '/admin/author') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_admin_author_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'blog_admin_author_index');
                        }

                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::indexAction',  '_route' => 'blog_admin_author_index',);
                    }
                    not_blog_admin_author_index:

                    // blog_admin_author_create
                    if ($pathinfo === '/admin/author/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_blog_admin_author_create;
                        }

                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::createAction',  '_route' => 'blog_admin_author_create',);
                    }
                    not_blog_admin_author_create:

                    // blog_admin_author_new
                    if ($pathinfo === '/admin/author/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_admin_author_new;
                        }

                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::newAction',  '_route' => 'blog_admin_author_new',);
                    }
                    not_blog_admin_author_new:

                    // blog_admin_author_show
                    if (preg_match('#^/admin/author/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_admin_author_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_author_show')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::showAction',));
                    }
                    not_blog_admin_author_show:

                    // blog_admin_author_edit
                    if (preg_match('#^/admin/author/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_admin_author_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_author_edit')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::editAction',));
                    }
                    not_blog_admin_author_edit:

                    // blog_admin_author_update
                    if (preg_match('#^/admin/author/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_blog_admin_author_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_author_update')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::updateAction',));
                    }
                    not_blog_admin_author_update:

                    // blog_admin_author_delete
                    if (preg_match('#^/admin/author/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_blog_admin_author_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_author_delete')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::deleteAction',));
                    }
                    not_blog_admin_author_delete:

                }

                // blog_admin_default_index
                if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_default_index')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\DefaultController::indexAction',));
                }

                if (0 === strpos($pathinfo, '/admin/login')) {
                    // blog_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'blog_admin_security_login',);
                    }

                    // blog_admin_security_logincheck
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'blog_admin_security_logincheck',);
                    }

                }

            }

            // blog_core_author_show
            if (0 === strpos($pathinfo, '/author') && preg_match('#^/author/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_core_author_show')), array (  '_controller' => 'Blog\\CoreBundle\\Controller\\AuthorController::showAction',));
            }

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
