<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

    #[Route('/portfolio_3', name: 'app_portfolio_3')]
    public function portfolio_3(): Response
    {
        return $this->render('accueil/portfolio_3.html.twig', [
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

    
    #[Route('/generate-cv-pdf', name: 'generate_cv_pdf', methods: ['POST'])]
    public function generateCvPdf(Request $request): Response
    {
        // Récupérer les données du formulaire
        $name = $request->request->get('name');
        $email = $request->request->get('email');

        // Configurer Dompdf selon vos besoins
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instancier Dompdf avec nos options
        $dompdf = new Dompdf($pdfOptions);

        // Récupérer le HTML généré dans notre fichier twig
        $html = $this->renderView('accueil/cv.html.twig', [
            'name' => $name,
            'email' => $email,
        ]);

        // Charger le HTML dans Dompdf
        $dompdf->loadHtml($html);

        // (Optionnel) Configurer la taille et l'orientation du papier
        $dompdf->setPaper('A4', 'portrait');

        // Rendre le HTML en PDF
        $dompdf->render();

        // Sortir le PDF généré dans le navigateur (téléchargement forcé)
        $dompdf->stream("CV.pdf", [
            "Attachment" => true
        ]);

        return new Response("PDF généré avec succès", 200);
    }

}

