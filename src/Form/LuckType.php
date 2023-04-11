<?php

namespace App\Form;

use App\Entity\Luck;
use App\Entity\Player;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LuckType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description',TextareaType::class, [
                'label'=>'Description',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('player', EntityType::class,[
                'label' => 'Player',
                'class' => Player::class,
                'attr' => [
                    'class'=> 'form-control'
                ],
                'query_builder'=> function (EntityRepository $er){
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.name', 'ASC');
    },
                'choice_label' => 'name',
                'required'=>false,
            ])
            ->add('save',SubmitType::class,[
                'label'=>'Save',
                'attr'=> [
                    'class' => 'btn btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Luck::class,
        ]);
    }
}
