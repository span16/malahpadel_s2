<?php
// src/Form/ProfilType.php

namespace App\Form;

use App\Entity\Profil;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints as Assert;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Pas besoin d'ajouter 'id_user' directement, car la relation est gérée par Doctrine
            ->add('avatar', FileType::class, [
                'label' => 'Avatar (image)',
                'required' => false,
                'mapped' => false,
                'attr' => ['accept' => 'image/*'],
                'constraints' => [
                    new Assert\Image([
                        'maxSize' => '2M',
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (jpeg, png, etc).',
                    ])
                ],
            ])
            
            ->add('bio', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => 500,
                        'maxMessage' => 'La biographie ne doit pas dépasser {{ limit }} caractères.'
                    ])
                ],
            ])
            ->add('preferences', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Les préférences doivent faire moins de {{ limit }} caractères.'
                    ])
                ],
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Profil::class,
            'user' => null, // Ajouter l'utilisateur dans les options du formulaire
        ]);
    }
}
