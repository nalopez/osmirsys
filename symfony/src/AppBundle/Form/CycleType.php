<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CycleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $tenantChoices = [];
        foreach ($options['data']['tenants'] as $tenant) {
            $tenantChoices[$tenant->getFirstName() . " " . $tenant->getLastName()] = $tenant->getTenantId();
        }

        $penChoices = [];
        foreach ($options['data']['pens'] as $tenant) {
            $penChoices[$tenant->getPenCode()] = $tenant->getPenId();
        }


        $builder
            ->add('cycleId', HiddenType::class)
            ->add('tenantId', ChoiceType::class, [
                'label' => 'Tenant Name',
                'required' => true,
                /*'choices' => $options['data']['tenants'],
                'choice_label' => function($tenant, $key, $value) {
                    return $tenant->getFirstName() . " " . $tenant->getLastName();
                },
                'choice_value' => function($tenant) {
                    return $tenant->getTenantId();
                },*/
                'placeholder' => 'Please select..',
                'choices' => $tenantChoices,
                /*'preferred_choices' => function($tenant, $key, $value) {
                    return $category->getName() == 'Cat2' || $category->getName() == 'Cat3';
                }*/
            ])
            ->add('penId', ChoiceType::class, [
                'label' => 'Pen Code',
                'required' => true,
                'placeholder' => 'Please select..',
                'choices' => $penChoices,
            ])
            ->add('cycleCount', NumberType::class)
            ->add('headCount', NumberType::class)
            ->add('startDate', DateType::class, [
                'format' => 'yyyy-MM-dd',
            ])
            ->add('endDate', DateType::class, [
                'format' => 'yyyy-MM-dd',
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