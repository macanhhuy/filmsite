<?php

namespace Acme\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('email', 'email')
		->add('fullname', 'text')
		->add('submit', 'submit');		
	}

	public function getName()
	{
		return 'person';
	}
}