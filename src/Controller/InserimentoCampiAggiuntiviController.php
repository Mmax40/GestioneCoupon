<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InserimentoCampiAggiuntiviController extends AbstractController
{
    /**
     * @Route("/inserimento/campi/aggiuntivi", name="inserimento_campi_aggiuntivi")
     */
    public function index(): Response
    {
   
        return $this->render('inserimento_campi_aggiuntivi/index.html.twig', [
            'controller_name' => 'InserimentoCampiAggiuntiviController',
        ]);
    }
}
