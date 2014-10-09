<?php

namespace Blog\AdminBundle\Controller;

use Blog\ModelBundle\Entity\Post;
use Blog\ModelBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as DI;
use JMS\DiExtraBundle\Annotation as JMS;


class AdminController extends Controller
{

    /**
     * Lists all Author entities.
     * @DI\Security("has_role('ROLE_USER')")
     * @DI\Route("/dashboard")
     * @DI\Method("GET")
     * @DI\Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ModelBundle:Post')->findBy(array('author' => $this->getUser()));

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Author entity.
     *
     * @DI\Route("/")
     * @DI\Method("POST")
     */
    public function createAction(Request $request)
    {
        $entity = new Post();
        $entity->setAuthor($this->container->get('security.context')->getToken()->getUser());
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('blog_admin_admin_index'));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Author entity.
     *
     * @param Post $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Post $entity)
    {
        $form = $this->createForm(new PostType(), $entity, array(
            'action' => $this->generateUrl('blog_admin_admin_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Post entity.
     *
     * @DI\Route("/post/new")
     * @DI\Method("GET")
     * @DI\Template()
     */
    public function newAction()
    {
        $entity = new Post();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'postForm' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Author entity.
     * @DI\Security("has_role('ROLE_USER')")
     * @DI\Route("/blog/{id}")
     * @DI\Method("GET")
     * @DI\Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ModelBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Author entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
//            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Author entity.
     * @DI\Security("has_role('ROLE_USER')")
     * @DI\Route("blog/{id}/edit")
     * @DI\Method("GET")
     * @DI\Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ModelBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Blog entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Blog entity.
     *
     * @param Post $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Post $entity)
    {
        $form = $this->createForm(new PostType(), $entity);

        return $form;
    }

    /**
     * Edits an existing Blog entity.
     * @DI\Security("has_role('ROLE_USER')")
     * @DI\Route("/update/{id}")
     * @DI\Template("AdminBundle:Blog:edit.html.twig")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('ModelBundle:Post')->find($id);
        $postForm = $this->createForm(new PostType(), $post);
        $postForm->handleRequest($request);
        if ($postForm->isValid()) {
            $post = $postForm->getData();
            $em->persist($post);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('blog_admin_admin_index'));
    }

    /**
     * Deletes a Blog entity.
     * @DI\Security("has_role('ROLE_USER')")
     * @DI\Route("/delete/{id}")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ModelBundle:Post')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Blog entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('blog_admin_admin_index'));
    }

    /**
     * Creates a form to delete a Blog entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('blog_admin_admin_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm();
    }
}
