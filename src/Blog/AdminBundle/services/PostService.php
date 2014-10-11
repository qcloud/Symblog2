<?php
/**
 * Created by PhpStorm.
 * User: Shibly
 * Date: 10/11/2014
 * Time: 7:41 PM
 */

namespace Blog\AdminBundle\Services;

use JMS\DiExtraBundle\Annotation as JMS;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception;
use Blog\ModelBundle\Entity\Post;
use Blog\ModelBundle\Form\PostType;


/**
 * Class BlogService
 * @package Blog\CoreBundle\services
 * @JMS\Service("blog.post")
 */
class PostService
{

    /**
     * @JMS\Inject("service_container")
     */
    public $container;


    /**
     * @JMS\Inject("doctrine.orm.entity_manager")
     */
    public $entityManager;


    /**
     * @var \Symfony\Component\Form\FormFactory
     * @JMS\Inject("form.factory")
     */
    public $formFactory;


    /**
     * @param Request $request
     * @param null $id
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @return post
     */
    public function createUpdatePost(Request $request, $id = null)
    {
        if (null === $id) {
            $post = new Post();
            $post->setAuthor($this->container->get('security.context')->getToken()->getUser());
        } else {
            if (!$post = $this->$entityManager->getRepository('ModelBundle:Post')->findOneById($id)) {
                throw new Exception\NotFoundHttpException("Requested id: " . $id . " not found");
            }
        }
        $postForm = $this->formFactory->create(new PostType(), $post);
        $postForm->handleRequest($request);
        if ($postForm->isValid()) {
            $this->$entityManager->persist($post);
            $this->$entityManager->flush();
        }

        return $post;

    }

} 