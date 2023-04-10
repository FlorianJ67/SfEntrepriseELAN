<?php

namespace App\Controller;

use App\Entity\Entreprise;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntrepriseController extends AbstractController
{
    #[Route('/entreprise', name: 'app_entreprise')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entreprise = $doctrine->getRepository(Entreprise::class)->findAll();
        return $this->render('entreprise/index.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }
}
