<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user')]
final class UserController extends AbstractController
{#[Route('/dashboard', name: 'app_user_dashboard', methods: ['GET'])]
    public function dashboard(Request $request, UserRepository $userRepository): Response
    {
        $nom = $request->query->get('nom');
        $email = $request->query->get('email');
        $fonction = $request->query->get('fonction');
        $etat = $request->query->get('etat');
    
        $qb = $userRepository->createQueryBuilder('u');
    
        if ($nom) {
            $qb->andWhere('u.nom LIKE :nom')->setParameter('nom', '%' . $nom . '%');
        }
        if ($email) {
            $qb->andWhere('u.email LIKE :email')->setParameter('email', '%' . $email . '%');
        }
        if ($fonction) {
            $qb->andWhere('u.fonction = :fonction')->setParameter('fonction', $fonction);
        }
        if ($etat) {
            $qb->andWhere('u.etat = :etat')->setParameter('etat', $etat);
        }
    
        $users = $qb->getQuery()->getResult();
    
        // 🔴 Lecture des signalements depuis le fichier
        $signalements = [];
        $filePath = $this->getParameter('kernel.project_dir') . '/var/log/signalements.txt';
        if (file_exists($filePath)) {
            $signalements = file($filePath, FILE_IGNORE_NEW_LINES);
        }
    
        $totalUsers = count($users);
        $adminCount = count(array_filter($users, fn($u) => in_array('ROLE_ADMIN', $u->getRoles())));
        $userCount = count(array_filter($users, fn($u) => in_array('ROLE_USER', $u->getRoles())));
    
        return $this->render('user/dashboard.html.twig', [
            'users' => $users,
            'nom' => $nom,
            'email' => $email,
            'fonction' => $fonction,
            'etat' => $etat,
            'totalUsers' => $totalUsers,
            'adminCount' => $adminCount,
            'userCount' => $userCount,
            'signalements' => $signalements, // 👈 on le transmet à Twig
        ]);
    }
    
   
    #[Route(name: 'app_user_index', methods: ['GET'])]
public function index(): Response
{
    return $this->redirectToRoute('app_user_dashboard');
}
#[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $hasher): Response
{
    $user = new User();

    $form = $this->createForm(UserType::class, $user);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        if ($user->getMdp()) {
            $hashedPassword = $hasher->hashPassword($user, $user->getMdp());
            $user->setMdp($hashedPassword);
        }

        try {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_dashboard');
        } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
            // Message pour le champ email
            $form->get('email')->addError(new \Symfony\Component\Form\FormError("Cet email est déjà utilisé."));

            // Flash message global
            $this->addFlash('danger', "Un utilisateur avec cet email existe déjà.");
        }
    }

    return $this->render('user/new.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager, UserPasswordHasherInterface $hasher): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Si un nouveau mot de passe est fourni, on le hash
            if ($user->getMdp()) {
                $hashedPassword = $hasher->hashPassword($user, $user->getMdp());
                $user->setMdp($hashedPassword);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_user_dashboard');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_dashboard');
    }


    #[Route('/user/{id}/signaler', name: 'app_user_signaler')]
    public function signaler(User $user): Response
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/var/log/signalements.txt';
        $id = $user->getId();
    
        // éviter les doublons
        $existing = file_exists($filePath) ? file($filePath, FILE_IGNORE_NEW_LINES) : [];
        if (!in_array((string)$id, $existing)) {
            file_put_contents($filePath, $id . "\n", FILE_APPEND);
            $this->addFlash('success', "Utilisateur signalé !");
        } else {
            $this->addFlash('info', "Cet utilisateur a déjà été signalé.");
        }
    
        return $this->redirectToRoute('app_user_dashboard');
    }
    
    
}
