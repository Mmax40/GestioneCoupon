<?php

namespace App\Controller;

use App\Form\TrovaType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
       // $task = new Task();
       // $form = $this->createForm(TrovaType::class);
       $form = $this->createForm(TrovaType::class, [
            'action' => $this->generateUrl('ricevo'),
            'method' => 'POST',
        ]);

        // leggo i campi nel twig      
        $form->get('OnOff')->getData();
        $form->get('OnOff')->setData(true);

        return $this->renderForm('test/index.html.twig', [
            'form' => $form,
        ]);

    }

    /**
     * @Route("/ricevo", name="ricevo")
     */
    public function ricevo(): Response
    {
       // $task = new Task();
       // $form = $this->createForm(TrovaType::class);
       $form = $this->createForm(TrovaType::class, [
            'action' => $this->generateUrl('test'),
            'method' => 'GET',
        ]);

        // leggo i campi nel twig      
        $form->get('cognome')->getData();
        $form->get('cognome')->setData('ricevuto');

        return $this->renderForm('test/index.html.twig', [
            'form' => $form,
        ]);

    }
}
