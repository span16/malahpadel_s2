<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\IsTrue;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est requis.']),
                    new Length(['min' => 2, 'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.'])
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'constraints' => [
                    new NotBlank(['message' => 'Le prénom est requis.']),
                    new Length(['min' => 2, 'minMessage' => 'Le prénom doit contenir au moins {{ limit }} caractères.'])
                ]
            ])
            ->add('age', IntegerType::class, [
                'label' => 'Âge',
                'constraints' => [
                    new NotBlank(['message' => 'L\'âge est requis.']),
                    new Range([
                        'min' => 18,
                        'max' => 60,
                        'notInRangeMessage' => 'L\'âge doit être entre {{ min }} et {{ max }} ans.',
                    ])
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est requis.']),
                    new Email(['message' => 'L\'adresse email "{{ value }}" est invalide.'])
                ]
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Mot de passe',
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer un mot de passe.']),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères.',
                        'max' => 4096,
                    ])
                ]
            ])
            ->add('cin', TextType::class, [
                'label' => 'CIN',
                'constraints' => [
                    new NotBlank(['message' => 'Le CIN est requis.']),
                    new Length([
                        'min' => 8,
                        'max' => 8,
                        'exactMessage' => 'Le CIN doit contenir exactement {{ limit }} chiffres.',
                    ])
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'Accepter les conditions d’utilisation',
                'mapped' => false,
                'constraints' => [
                    new IsTrue(['message' => 'Vous devez accepter les conditions.'])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
