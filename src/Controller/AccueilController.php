<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('accueil/accueil.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('accueil/about.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('accueil/cv.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }   

    #[Route('/portfolio_1', name: 'app_portfolio_1')]
    public function portfolio_1(): Response
    {
        return $this->render('accueil/portfolio_1.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/portfolio_2', name: 'app_portfolio_2')]
    public function portfolio_2(): Response
    {
        return $this->render('accueil/portfolio_2.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/test', name: 'app_test')]
    public function test(): Response
    {
        return $this->render('accueil/test.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

}

