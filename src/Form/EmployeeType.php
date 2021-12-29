<?php

namespace App\Form;

use App\Entity\Employee;
use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'label' => 'Employee name',
                    'required' => true,
                    'attr' =>
                    [
                        'minlength' => 2,
                        'maxlength' => 50
                    ]
                ]
            )
            ->add(
                'address',
                TextType::class,
                [
                    'label' => 'Employee address',
                    'required' => true,
                    'attr' => [
                        'minlength' => 5,
                        'maxlength' => 30
                    ]
                ]
            )
            ->add(
                'contactNumber',
                TextType::class,
                [
                    'label' => 'Employee Contact Number',
                    'required' => true,
                    'attr' =>
                [
                    'minlength' => 5,
                    'maxlength' => 30
                ]
                ]
            )
            ->add(
                'position',
                TextType::class,
                [
                    'label' => 'Employee position',
                    'required' => true,
                    'attr' =>
                [
                    'minlength' => 5,
                    'maxlength' => 30
                ]
                ]
            )
            ->add(
                'orders',
                EntityType::class,
                [
                    'label' => 'Order',
                    'class' => Order::class,
                    'choice_label' => 'location',
                    'multiple' => true,
                    'expanded' => false
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
