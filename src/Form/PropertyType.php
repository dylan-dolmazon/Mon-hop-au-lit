<?php

namespace App\Form;

use App\Entity\Cases;


use App\Entity\Player;

use App\Entity\Property;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('house', NumberType::class, [
                'label' => 'House number',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('rent', NumberType::class, [
                'label' => 'Rent without house',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('rent1', NumberType::class, [
                'label' => 'Rent with 1 house',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('rent2', NumberType::class, [
                'label' => 'Rent with 2 house',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('rent3', NumberType::class, [
                'label' => 'Rent with 3 house',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('rent4', NumberType::class, [
                'label' => 'Rent with 4 house',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('rent5', NumberType::class, [
                'label' => 'Rent with 1 Hotel',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('priceHouse', NumberType::class, [
                'label' => '1 house price',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('mortgage', NumberType::class, [
                'label' => 'Mortgage price',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('color', ColorType::class, [
                'label' => 'Color',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('player', EntityType::class,[
                'label'=>'Player name',
                'class'=>Player::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'query_builder'=> function (EntityRepository $er){
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.name', 'ASC');
                },
                'choice_label' => 'name',
                'required'=>false,
            ])
            ->add('cases', EntityType::class,[
                'label'=>'Case name',
                'class'=>Cases::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'query_builder'=> function (EntityRepository $er){
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.name', 'ASC');
                },
                'choice_label' => 'name',
                'required'=>false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Create property',
                'attr' => [
                    'class' => 'btn btn-success'
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
