<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImportaWprdpressController extends AbstractController
{
    /**
     * @Route("/importa/wprdpress", name="importa_wprdpress")
     */
    public function index(): Response
    {
        return $this->render('importa_wprdpress/index.html.twig', [
            'controller_name' => 'ImportaWprdpressController',
        ]);
    }
}
