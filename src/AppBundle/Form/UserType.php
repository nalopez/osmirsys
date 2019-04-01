<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userId', HiddenType::class)
            ->add('firstName', TextType::class, [
                'required' => true,
            ])
            ->add('lastName', TextType::class, [
                'required' => true,
            ])
            ->add('username', TextType::class, [
                'required' => true,
                'disabled' => ($options['data']['process']  == 'edit') ? true : false,
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 5]),
                ],
            ])
            ->add('password', RepeatedType::class, [
                'label' => 'Re-type password',
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 8]),
                ],
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],

            ])
            ->add('save', SubmitType::class, ['label' => $options['data']['label']])
            ->add('cancel', SubmitType::class, [
                'label' => 'Cancel',
                'attr' => [
                    'formnovalidate' => true,
                ],
            ]);
    }
}