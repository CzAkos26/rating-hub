<?php

namespace App\Form;

use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companyName', null, [
                'label' => 'Company',
            ])
            ->add('rating', ChoiceType::class, [
                'choices' => [
                    '⭐ 1' => 1,
                    '⭐⭐ 2' => 2,
                    '⭐⭐⭐ 3' => 3,
                    '⭐⭐⭐⭐ 4' => 4,
                    '⭐⭐⭐⭐⭐ 5' => 5,
                ],
                'placeholder' => 'Select a rating',
            ])
            ->add('reviewText', TextareaType::class, [
                'label' => 'Review',
                'attr' => [
                    'rows' => 5,
                ],
            ])
            ->add('authorEmail', EmailType::class, [
                'label' => 'Email address',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
