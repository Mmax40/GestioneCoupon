<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CorsoController extends AbstractController
{
    /**
     * @Route("/corso", name="corso")
     */
    public function index(): Response
    
    {

         $Coup = $this -> getDoctrine() -> getRepository(MoBlockCoupon::class)->findAll();
        
        return $this->render('coupon/index.html.twig', array ('Coup' => $Coup));
   }
}
