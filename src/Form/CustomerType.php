<?php

namespace App\Form;

use App\Entity\Customer;
use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'label' => 'Customer name',
                    'required' => true,
                    'attr' =>
                    [
                        'minlength' => 2,
                        'maxlength' => 50
                    ]
                ]
            )
            ->add(
                'phoneNumber',
                TextType::class,
                [
                    'label' => 'Customer phoneNumber',
                    'required' => true,
                    'attr' =>
                    [
                        'minlength' => 2,
                        'maxlength' => 50
                    ]
                ]
            )
            ->add(
                'email',
                TextType::class,
                [
                    'label' => 'Customer email',
                    'required' => false,
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
                    'label' => 'Customer address',
                    'required' => true,
                    'attr' =>
                    [
                        'minlength' => 2,
                        'maxlength' => 50
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
                    'required' => false,
                    'multiple' => true,
                    'expanded' => false
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
        ]);
    }
}
