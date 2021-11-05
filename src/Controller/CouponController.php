<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CouponType;
use App\Entity\MoBlockCoupon;
use App\Repository\CouponRepository;


class CouponController extends AbstractController
{
    /**
     * @Route("/coupon", name="coupon")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */

   public function index( Request $request, EntityManagerInterface $entityManager, CouponRepository $CouponRepository)
    {
      /** @var Coupon $Coupon */

         $Coupon = new MoBlockCoupon();
        
       $formCoupon =  $this->createForm(CouponType::class, $Coupon);
       $formCoupon ->HandleRequest($request);

       if ($formCoupon->isSubmitted() && $formCoupon->isValid()) {
        /** @var Coupon $Coupon */
        $Coupon =$formCoupon ->getData();
        $entityManager->persist($Coupon);
        $entityManager ->flush();
        }


        $Coupon = $CouponRepository ->findAll();

        return $this->render('coupon/index.html.twig', [
            'Coupon' => $Coupon,
            'controller_name' => 'CouponController',
            'formCoupon' => $formCoupon->createView() ,
            
        ]);
    }

     /**
     * @Route("/coup", name="Coupon_all")
     */

     public function show(): Response
    {
        $Coup = $this -> getDoctrine() -> getRepository(MoBlockCoupon::class)->findAll();
        
        return $this->render('coupon/index.html.twig', array ('Coup' => $Coup));
    }

      /**
     * @Route("/couponUsato/{id}", name="couponUsato")
     */

     public function uno($id)
    {
        $id = $this -> getDoctrine() -> getRepository(MoBlockCoupon::class)->find($id);
        
        return $this->render('coupon/uno.html.twig', array ('Coupon' => $id));
    }
}
