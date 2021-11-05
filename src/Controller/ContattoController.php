<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ContattoType;
use App\Repository\ContattoRepository;
use App\Entity\Contatto;

class ContattoController extends AbstractController
{
    /**
     * @Route("/contatto", name="contatto")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
   
    public function index( Request $request, EntityManagerInterface $entityManager, ContattoRepository $ContattoRepository)
    {
        /** @var Contatto $Contatto */
  

        $Contatto = new Contatto();
        
       $formContatto =  $this->createForm(ContattoType::class, $Contatto);
       $formContatto ->HandleRequest($request);

       if ($formContatto->isSubmitted() && $formContatto->isValid()) {
        /** @var Contatto $Contatto */
        $Contatto =$formContatto ->getData();
        $entityManager->persist($Contatto);
        $entityManager ->flush();
        }


        $Contatto = $ContattoRepository ->findAll();


        return $this->render('contatto/index.html.twig', [
             'Contatto' => $Contatto,
            'controller_name' => 'ContattoController',
            'formContatto' => $formContatto->createView() ,
        ]);
    }
}
