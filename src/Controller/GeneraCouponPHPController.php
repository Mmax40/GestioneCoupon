<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneraCouponPHPController extends AbstractController
{
    /**
     * @Route("/GeneraCoupon", name="genera_coupon_p_h_p")
     */
    public function index(): Response
    {
        return $this->render('genera_coupon_php/index.html.twig', [
            'controller_name' => 'GeneraCouponPHPController',
        ]);
    }
}
