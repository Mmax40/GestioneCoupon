<?php

namespace App\Controller;

use App\Repository\BlockCouponRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\MoBlockCouponCourses;



class BlockCouponCoursesController extends AbstractController
{
    /**
     * @Route("/coupon_corso", name="block_coupon_courses")
     */
    public function index(): Response

    {
        $CouponCourses = $this -> getDoctrine() ->getRepository(MoBlockCouponCourses::class)->findAll();
        return $this->render('block_coupon_courses/index.html.twig', array('CouponCorso' => $CouponCourses) );
    }
}



