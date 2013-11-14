<?php
/*
 * Page Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace BardisCMS\PageBundle\Admin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Sonata\AdminBundle\Form\EventListener\ResizeFormListener;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use BardisCMS\PageBundle\Entity\ContentSlide;

class ContentSlideType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {                  
        $formBuilder
            ->add('imageLinkTitle', 'text', array('attr' => array('class' => 'imageLinkTitle'), 'label' => 'Link Title', 'required' => true))
            ->add('imageLinkURL', 'text', array('attr' => array('class' => 'imageLinkURL'), 'label' => 'Link URL', 'required' => true))
            ->add('imageFile', 'sonata_media_type', array( 'provider' => 'sonata.media.provider.image', 'context' => 'bgimage', 'attr' => array( 'class' => 'imagefield'), 'label' => 'Image File', 'required' => true))
        ;
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {      
        $optionsNormalizer = function (Options $options, $value) {
            $value = 'BardisCMS\PageBundle\Entity\ContentSlide';

            return $value;
        };

        $resolver->setNormalizers(array(
            'data_class' => $optionsNormalizer,
        ));
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'contentslide';
    }

}