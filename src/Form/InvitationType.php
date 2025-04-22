<?php

namespace App\Form;

use App\Entity\Invitation;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class InvitationType extends AbstractType
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('receiver', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'mapped' => false,
                'query_builder' => function (UserRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.email', 'ASC');
                },
                'label' => 'Select User Email',
                'placeholder' => 'Choose a user'
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'required' => true
            ])
        ;

        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            $invitation = $event->getData();
            $form = $event->getForm();
            
            /** @var User|null $receiver */
            $receiver = $form->get('receiver')->getData();
            if ($receiver) {
                $invitation->setReceiverEmail($receiver->getEmail());
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Invitation::class,
        ]);
    }
} 