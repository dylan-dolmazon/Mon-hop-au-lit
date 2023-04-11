<?php

namespace App\Form;

use App\Entity\Cases;
use App\Entity\Type;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description')
            ->add('cases', EntityType::class,[
                'class'=>Cases::class,
                'query_builder'=>function(EntityRepository $er){
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.position');
                },
                'choice_label'=>'name',
                'required'=>false,
                'mapped'=>false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Type::class,
        ]);
    }
}
