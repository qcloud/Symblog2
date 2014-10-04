<?php

namespace Blog\CoreBundle\Controller;

use Blog\ModelBundle\Form\CommentType;
use Blog\ModelBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class PostController extends Controller
{
    /**
     * Show the posts index
     * @return array
     *
     * @Route("/")
     * @Template()
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
     * @Route("/{slug}")
     *
     * @Template()
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
     * @Route("/{slug}/create-comment")
     * @Method("POST")
     * @Template("CoreBundle:Post:show.html.twig")
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
