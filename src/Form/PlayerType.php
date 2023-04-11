<?php

namespace App\Form;

use App\Entity\Cases;
use App\Entity\Icon;
use App\Entity\Player;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class, [
                'label' => 'Name',
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('money', NumberType::class, [
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('ordre', NumberType::class, [
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('cases', EntityType::class,[

                'class'=>Cases::class,
                'attr'=>[
                    'class'=> 'form-control'
                ],

                'required'=>true
            ])
            ->add('icon',EntityType::class, [
                'label'=>"Icon",
                'class'=>Icon::class,
                'attr'=>[
                    'class'=> 'form-control'
                ],
                'query_builder'=>function(EntityRepository $er) {
                    return $er->createQueryBuilder('i')

                        ->orderBy('i.name');
                },
                'choice_label'=>'name',
                'required'=>false
            ])
            ->add('color',ColorType::class, [
                'label' => 'Color',
                'attr' => [
                    'class'=> 'form-control'
                ]])
            ->add('Save',SubmitType::class, [
                'label' => 'Create player',
                'attr' => [
                    'class' => 'btn btn-success'
                ]]);

    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Player::class,
        ]);
    }
}
