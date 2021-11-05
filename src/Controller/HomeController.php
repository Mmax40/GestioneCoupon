<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
 
      return $this->redirectToRoute('homeAdmin');
    }

     /**
     * @Route("/admin/", name="homeAdmin")
     */
    public function indexAdmin(): Response
    {

  $connection = $this -> getDoctrine() -> getManager() ->getConnection();
      $sql = 'SELECT
Count(mdl_block_coupon.id) as num
FROM mdl_block_coupon_courses
  RIGHT OUTER JOIN mdl_block_coupon
    ON mdl_block_coupon_courses.couponid = mdl_block_coupon.id
  LEFT OUTER JOIN mdl_course
    ON mdl_course.id = mdl_block_coupon_courses.courseid
  LEFT OUTER JOIN gest_account
    ON gest_account.id = mdl_block_coupon.ownerid
  LEFT OUTER JOIN mdl_user
    ON mdl_user.id = mdl_block_coupon.userid
  LEFT OUTER JOIN CostoCoupon
    ON mdl_block_coupon.submission_code = CostoCoupon.CodiceCoupon
WHERE mdl_user.username IS NULL';
      $stmt = $connection -> prepare($sql);
      $stmt -> execute();


      $connection = $this -> getDoctrine() -> getManager() ->getConnection();
      $sql = 'SELECT
  Count(mdl_block_coupon.id) as num
 FROM mdl_block_coupon_courses
  RIGHT OUTER JOIN mdl_block_coupon
    ON mdl_block_coupon_courses.couponid = mdl_block_coupon.id
  LEFT OUTER JOIN mdl_course
    ON mdl_course.id = mdl_block_coupon_courses.courseid
  LEFT OUTER JOIN gest_account
    ON gest_account.id = mdl_block_coupon.ownerid
  LEFT OUTER JOIN mdl_user
    ON mdl_user.id = mdl_block_coupon.userid
  LEFT OUTER JOIN CostoCoupon
    ON mdl_block_coupon.submission_code = CostoCoupon.CodiceCoupon
WHERE mdl_user.username Like "%%"';
      $stmt2 = $connection -> prepare($sql);
      $stmt2 -> execute();


         $connection = $this -> getDoctrine() -> getManager() ->getConnection();
      $sql = 'SELECT
Sum(CostoCoupon.PrezzoCoupon) as num
FROM mdl_block_coupon_courses
  RIGHT OUTER JOIN mdl_block_coupon
    ON mdl_block_coupon_courses.couponid = mdl_block_coupon.id
  LEFT OUTER JOIN mdl_course
    ON mdl_course.id = mdl_block_coupon_courses.courseid
  LEFT OUTER JOIN gest_account
    ON gest_account.id = mdl_block_coupon.ownerid
  LEFT OUTER JOIN mdl_user
    ON mdl_user.id = mdl_block_coupon.userid
  LEFT OUTER JOIN CostoCoupon
    ON mdl_block_coupon.submission_code = CostoCoupon.CodiceCoupon';
      $stmt3 = $connection -> prepare($sql);
      $stmt3 -> execute();

       return $this->render('home/home.html.twig', array ('stmt' => $stmt, 'stmt2' => $stmt2, 'stmt3' => $stmt3));

      
    }
}
