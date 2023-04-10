<?php

namespace App\Controller;

use App\Entity\Employe;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeController extends AbstractController
{
    #[Route('/employe', name: 'app_employe')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entreprises = $doctrine->getRepository(Entreprise::class)->findBy([],["rasionSociale" => "DESC"]);
        return $this->render('employe/index.html.twig', [
            'entreprises' => $entreprises,
        ]);
    }

    public function show(): Response
    {
        $entreprise = "";
        return $this->render('entreprise/show.html.twig',[
            'entreprise' => $entreprise
        ]);
    }
}
