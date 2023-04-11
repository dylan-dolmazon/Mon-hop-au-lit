<?php

namespace App\Form;

use App\Entity\Cases;

use App\Entity\Player;

use App\Entity\Station;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


            ->add('name',TextType::class, [
                'label' => 'Name',
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('rent1',NumberType::class, [
                'label' => 'Price with 1 station',
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('rent2',NumberType::class, [
                'label' => 'Price with 2 stations',
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('rent3',NumberType::class, [
                'label' => 'Price with 3 stations',
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('rent4',NumberType::class, [
                'label' => 'Price with all stations',
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('mortgage',NumberType::class, [
                'label' => 'Mortgage price',
                'attr' => [
                    'class'=> 'form-control'
                ]])
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
            ->add('Save',SubmitType::class, [
                'label' => 'Create Station',
                'attr' => [
                    'class' => 'btn btn-success'
                ]])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Station::class,
        ]);
    }
}
