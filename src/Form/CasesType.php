<?php

namespace App\Form;

use App\Entity\Cases;
use App\Entity\Player;
use App\Entity\Property;
use App\Entity\Station;
use App\Entity\Type;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CasesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'Name',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Name'
                ]]
            )
            ->add('position', NumberType::class, [
                    'label'=>'Position',
                    'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Position'
                ]]
            )
            ->add('type', EntityType::class,[
                'label'=>'Type',
                'class'=>Type::class,
                'attr' => [
                    'class' => 'form-control'
                ],

                'query_builder'=>function(EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.description');
                },
                'choice_label'=>'description',
                'required'=>true,

            ])
            ->add('property', EntityType::class,[
                'label'=>'Property',
                'class'=>Property::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'query_builder'=>function(EntityRepository $er){
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.id');
                },
                'choice_label'=> 'name',
                'required'=>false,

            ])
            ->add('price', NumberType::class,[
                'label'=>'Price',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Price'
                ],
                'required'=>false,
            ])
            ->add('station', EntityType::class,[
                'label'=>'Station',
                'class'=>Station::class,
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
            ->add('players', EntityType::class,[
                'label'=>'Player',
                'class'=>Player::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'query_builder'=> function (EntityRepository $er){
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.name', 'ASC');
                },
                'choice_label' => 'name',
                'required'=>false,
                'mapped'=>false,
            ])
            ->add('value',NumberType::class,[
                'label'=>'Value',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Value'
                ],
                'required'=>true,
            ] )
            ->add(
                'Save',SubmitType::class, [
                'label' => 'Create Case',
                'attr'=>[
                'class' => 'btn btn-success'
            ]])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cases::class,
        ]);
    }
}
