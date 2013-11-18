<?php

/*
 * Page Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactForm extends AbstractType {
    
    // Creating the contact form and the fields
    public function buildForm(FormBuilderInterface $builder, array $options) {
	
	$builder->add('firstname', 'text', array(
	    'label' => 'First Name',
	    'attr' => array(
		'placeholder' => '',
		'data-original-title' => 'Please enter your First Name',
		'rel' => 'tooltip',
	    ))
	);

	$builder->add('surname', 'text', array(
	    'label' => 'Surname',
	    'attr' => array(
		'placeholder' => '',
		'data-original-title' => 'Please enter your Surname',
		'rel' => 'tooltip',
	    ))
	);

	$builder->add('email', 'email', array(
	    'label' => 'Email',
	    'attr' => array(
		'placeholder' => '',
		'data-original-title' => 'Please enter a valid email address',
		'rel' => 'tooltip',
	    ))
	);

	$builder->add('comment', 'textarea', array(
	    'label' => 'Comment / Question',
	    'attr' => array(
		'placeholder' => '',
		'data-original-title' => 'Please enter your Comment / Question',
		'rel' => 'tooltip',
	    ))
	);
    }

    public function getName() {
	
	// Define the name of the form to call it for rendering
	return 'contactform';
    }

}
