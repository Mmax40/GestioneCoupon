<?php

namespace App\Controller;

use App\Calculator\Sum;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SommaController extends AbstractController
{
    /** @var Sum $sum */
    private $sum;
    public function __construct(Sum $sum) // così uso un costruttore e la passo come argomento
    {
        $this->sum = $sum;
    }
    /**
     * @Route("/somma", name="somma")
     * @return Response
     */

    public function index() //index(Sum $sum) la tolgo in ingresso della funzione.
    {
        $result = $this->sum->sum(1,2 ); // aggiungo il this perchè sta nel costruttore

        //dd($result); // funzione che si usa solo in sviluppo, visualizza le variabili

        return $this->render('somma/index.html.twig', [
            'controller_name' => 'SommaController',
        ]);
    }
}
