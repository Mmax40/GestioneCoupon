<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CostoCouponType;
use App\Entity\Costocoupon;
use App\Entity\MoBlockCoupon;
use App\Repository\CostoCouponRepository;


class CostoCouponController extends AbstractController
{
    /**
     * @Route("/prezzoCoupon", name="costo_coupon")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
      public function index( Request $request, EntityManagerInterface $entityManager, CostoCouponRepository $CostoCouponRepository)
    {
   /** @var CostoCoupon $CostoCoupon */
 
        $CostoCoupon = new CostoCoupon();

        $CostoCoupon = $CostoCouponRepository ->find(1); // popola il form con questo
        

       $formPrezzoCoupon =  $this->createForm(CostoCouponType::class, $CostoCoupon);
       $formPrezzoCoupon ->HandleRequest($request);

       if ($formPrezzoCoupon ->isSubmitted() && $formPrezzoCoupon->isValid()) {
        
        $CostoCoupon =$formPrezzoCoupon ->getData();
        $entityManager->persist($CostoCoupon);
        $entityManager ->flush();
        }

        $FormAll = $CostoCouponRepository ->findAll();

      //  $FormOne = $CostoCouponRepository ->find(1);

        $FormOneBy = $CostoCouponRepository ->findBy([
            'prezzocoupon' => '50'
        ]);


        return $this->render('costo_coupon/index.html.twig', [
            'FormAll' => $FormAll,
            'FormOne' => $FormOne,
            'FormOneBy' => $FormOneBy,

            'controller_name' => 'CarController',
            'FormCostoCoupon' => $formPrezzoCoupon->createView() ,
        ]);
    }

    

}

