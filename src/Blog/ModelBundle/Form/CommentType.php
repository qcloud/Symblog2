<?php

namespace Blog\ModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * {@inheritDoc}
 */
class CommentType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('authorName', 'text', array('label' => 'Name'))
            ->add('body', 'textarea', array('label' => 'Body'))
            ->add('send', 'submit', array('label' => 'Send'));
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\ModelBundle\Entity\Comment'
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'comment_form';
    }
}
