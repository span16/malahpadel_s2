<?php

namespace App\Form;
use Symfony\Component\Validator\Constraints as Assert;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('nom', TextType::class, [
            'label' => 'Nom',
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le nom est requis.']),
                new Assert\Length([
                    'min' => 2,
                    'minMessage' => 'Le nom doit faire au moins {{ limit }} caractères.'
                ])
            ]
        ])
        ->add('prenom', TextType::class, [
            'label' => 'Prénom',
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le prénom est requis.']),
            ]
        ])
        ->add('age', null, [
            'label' => 'Âge',
            'constraints' => [
                new Assert\NotBlank(['message' => 'L\'âge est requis.']),
                new Assert\Range([
                    'min' => 10,
                    'max' => 80,
                    'notInRangeMessage' => 'L\'âge doit être entre {{ min }} et {{ max }}.',
                ])
                
            ]
        ])
        ->add('email', null, [
            'label' => 'Email',
            'constraints' => [
                new Assert\NotBlank(['message' => 'L\'email est requis.']),
                new Assert\Email(['message' => 'Adresse email invalide.'])
            ]
        ])
        ->add('mdp', PasswordType::class, [
            'label' => 'Mot de passe',
            'required' => false, // facultatif lors de la modification
            'constraints' => [
                new Assert\Length([
                    'min' => 6,
                    'minMessage' => 'Le mot de passe doit faire au moins {{ limit }} caractères.'
                ])
            ]
        ])
        ->add('cin', null, [
            'label' => 'CIN',
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le CIN est requis.']),
                new Assert\Regex([
                    'pattern' => '/^\d{8}$/',
                    'message' => 'Le CIN doit contenir exactement 8 chiffres.',
                ])
                
                
            ]
        ])
        ->add('etat', TextType::class, [
            'label' => 'État',
            'constraints' => [
                new Assert\NotBlank(['message' => 'Veuillez spécifier un état.']),
            ]
        ])
        ->add('fonction', ChoiceType::class, [
            'label' => 'Fonction',
            'choices' => [
                'Administrateur' => 'admin',
                'Utilisateur' => 'utilisateur',
            ],
            'expanded' => false,
            'multiple' => false,
            'constraints' => [
                new Assert\NotBlank(['message' => 'Veuillez choisir une fonction.']),
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
