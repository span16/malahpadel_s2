<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\ProfilType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/profil')]
class ProfilController extends AbstractController
{
    #[Route('/', name: 'app_profil_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $profil = $entityManager->getRepository(Profil::class)->findOneBy(['user' => $this->getUser()]);

        if ($profil) {
            return $this->redirectToRoute('app_profil_show_back', ['id' => $profil->getId()]);
        }

        return $this->redirectToRoute('app_profil_new');
    }

    #[Route('/new', name: 'app_profil_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $profil = new Profil();
        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $avatarFile */
            $avatarFile = $form->get('avatar')->getData();

            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'avatar');
                }

                $profil->setAvatar($newFilename);
            }

            $profil->setUser($this->getUser());

            $entityManager->persist($profil);
            $entityManager->flush();

            return $this->redirectToRoute('app_profil_show_back', ['id' => $profil->getId()]);
        }

        return $this->render('profil/new_back.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/back/{id}', name: 'app_profil_show_back', methods: ['GET'])]
    public function showBack(Profil $profil): Response
    {
        if (!$this->getUser() || $profil->getUser() !== $this->getUser()) {
            $this->addFlash('error', 'Accès non autorisé');
            return $this->redirectToRoute('app_profil_index');
        }

        return $this->render('profil/show_back.html.twig', [
            'profil' => $profil,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_profil_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Profil $profil, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        if (!$this->getUser() || $profil->getUser() !== $this->getUser()) {
            $this->addFlash('error', 'Accès non autorisé');
            return $this->redirectToRoute('app_profil_index');
        }

        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $avatarFile */
            $avatarFile = $form->get('avatar')->getData();

            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

                try {
                    $avatarFile->move(
                        $this->getParameter('avatars_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'avatar');
                }

                $profil->setAvatar($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_profil_show_back', ['id' => $profil->getId()]);
        }

        return $this->render('profil/edit.html.twig', [
            'form' => $form->createView(),
            'profil' => $profil,
        ]);
    }

    #[Route('/{id}', name: 'app_profil_delete', methods: ['POST'])]
    public function delete(Request $request, Profil $profil, EntityManagerInterface $entityManager): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        if ($profil->getUser() === $this->getUser() && $this->isCsrfTokenValid('delete' . $profil->getId(), $request->request->get('_token'))) {
            $entityManager->remove($profil);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_profil_new_front');
    }
    #[Route('/{id}', name: 'app_profil_delete_back', methods: ['POST'])]
    public function deleteB(Request $request, Profil $profil, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $profil->getId(), $request->request->get('_token'))) {
            $em->remove($profil);
            $em->flush();
        }
        return $this->redirectToRoute('app_user_dashboard');
    }
    #[Route('/back/{id}/edit', name: 'app_profil_edit_back', methods: ['GET', 'POST'])]
public function editBack(Request $request, Profil $profil, EntityManagerInterface $em, SluggerInterface $slugger): Response
{
    if (!$this->getUser() || $this->getUser() !== $profil->getUser()) {
        return $this->redirectToRoute('app_login');
    }

    $form = $this->createForm(ProfilType::class, $profil);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $avatarFile = $form->get('avatar')->getData();
        if ($avatarFile) {
            $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

            try {
                $avatarFile->move($this->getParameter('avatars_directory'), $newFilename);
                $profil->setAvatar($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Échec du téléchargement de l\'image.');
            }
        }

        $em->flush();
        return $this->redirectToRoute('app_profil_show_back', ['id' => $profil->getId()]);
    }

    return $this->render('profil/edit_back.html.twig', [
        'form' => $form->createView(),
        'profil' => $profil,
    ]);
}

#[Route('/front/new', name: 'app_profil_new_front', methods: ['GET', 'POST'])]
public function newFront(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
{
    if (!$this->getUser()) {
        return $this->redirectToRoute('app_login');
    }

    $profil = new Profil();
    $form = $this->createForm(ProfilType::class, $profil);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $avatarFile = $form->get('avatar')->getData();
        if ($avatarFile) {
            $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

            try {
                $avatarFile->move($this->getParameter('avatars_directory'), $newFilename);
                $profil->setAvatar($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors de l\'upload de l\'avatar');
            }
        }

        $profil->setUser($this->getUser());
        $em->persist($profil);
        $em->flush();

        return $this->redirectToRoute('app_profil_my_front');
    }

    return $this->render('profil/new_front.html.twig', [
        'form' => $form->createView(),
    ]);
}

#[Route('/front', name: 'app_profil_my_front', methods: ['GET'])]
public function showMyProfil(EntityManagerInterface $em): Response
{
    $user = $this->getUser();

    if (!$user) {
        return $this->redirectToRoute('app_login');
    }

    $profil = $em->getRepository(Profil::class)->findOneBy(['user' => $user]);

    if (!$profil) {
        return $this->redirectToRoute('app_profil_new_front');
    }

    return $this->render('profil/show_front.html.twig', [
        'profil' => $profil,
    ]);
}

#[Route('/front/{id}', name: 'app_profil_show_front', methods: ['GET'])]
public function showFront(?Profil $profil): Response
{
    if (!$profil || $profil->getUser() !== $this->getUser()) {
        $this->addFlash('error', 'Profil introuvable ou accès non autorisé.');
        return $this->redirectToRoute('app_home');
    }

    return $this->render('profil/show_front.html.twig', [
        'profil' => $profil,
    ]);
}

#[Route('/front/{id}/edit', name: 'app_profil_edit_front', methods: ['GET', 'POST'])]
public function editFront(Request $request, Profil $profil, EntityManagerInterface $em, SluggerInterface $slugger): Response
{
    // Vérifie que le profil appartient bien à l'utilisateur connecté
    if (!$this->getUser() || $profil->getUser() !== $this->getUser()) {
        $this->addFlash('error', 'Accès non autorisé.');
        return $this->redirectToRoute('app_home');
    }

    $form = $this->createForm(ProfilType::class, $profil);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $avatarFile = $form->get('avatar')->getData();

        if ($avatarFile) {
            $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

            try {
                $avatarFile->move($this->getParameter('avatars_directory'), $newFilename);
                $profil->setAvatar($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Échec de l\'upload de l\'avatar.');
            }
        }

        $em->flush();
        $this->addFlash('success', 'Profil mis à jour avec succès.');

        return $this->redirectToRoute('app_profil_show_front', ['id' => $profil->getId()]);
    }

    return $this->render('profil/edit_front.html.twig', [
        'form' => $form->createView(),
        'profil' => $profil,
    ]);
}


}