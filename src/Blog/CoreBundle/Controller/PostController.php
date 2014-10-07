<?php

namespace Blog\CoreBundle\Controller;

use Blog\ModelBundle\Form\CommentType;
use Blog\ModelBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as DI;
use Symfony\Component\HttpFoundation\Request;


class PostController extends Controller
{
    /**
     * Show the posts index
     * @return array
     *
     * @DI\Route("/")
     * @DI\Template()
     */
    public function indexAction()
    {

        $posts = $this->getDoctrine()->getRepository('ModelBundle:Post')->findAll();
        $latestPosts = $this->getDoctrine()->getRepository('ModelBundle:Post')->findLatest(5);
        return array('posts' => $posts,
            'latestPosts' => $latestPosts);
    }

    /**
     * Show a Post
     *
     * @param string $slug
     *
     * @throws NotFoundHttpException
     * @return array
     *
     * @DI\Route("/{slug}")
     *
     * @DI\Template()
     */
    public function showAction($slug)
    {
        $post = $this->getDoctrine()->getRepository('ModelBundle:Post')->findOneBy(
            array('slug' => $slug));
        if (null === $post) {
            throw $this->createNotFoundException('Post was not found');
        }
        $form = $this->createForm(new CommentType());
        return array('post' => $post, 'commentForm' => $form->createView());
    }

    /**
     * Create Comment
     *
     * @param Request $request
     *
     * @param string $slug
     *
     * @throws NotFoundHttpException
     *
     * @DI\Route("/{slug}/create-comment")
     * @DI\Method("POST")
     * @DI\Template("CoreBundle:Post:show.html.twig")
     * @return array
     */
    public function createCommentAction(Request $request, $slug)
    {
        $post = $this->getDoctrine()->getRepository('ModelBundle:Post')->findOneBy(array('slug' => $slug));
        if (null === $post) {
            throw $this->createNotFoundException('Post was not found');
        }

        $comment = new Comment();
        $comment->setPost($post);
        $form = $this->createForm(new CommentType(), $comment);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $commentForm = $form->getData();
            $em->persist($commentForm);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Your comment was submitted successfully');
            return $this->redirect($this->generateUrl('blog_core_post_show', array('slug' => $post->getSlug())));

        }

        return array('post' => $post, 'commentForm' => $form->createView());
    }

}
