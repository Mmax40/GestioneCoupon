<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MdlCourse;
use App\Form\TrovaType;

use Symfony\Component\BrowserKit\Request;
use App\Repository\BlockCouponRepository;


class CorsoMoodleController extends AbstractController
{

   /**
     * @Route("/test", name="test")
     */
    public function Ricerca(): Response
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

        return $this->renderForm('corso_moodle/phpAll.html.twig', [
            'form' => $form,
        ]);

    }



    /**
     * @Route("/admin/corsomoodle", name="corso_moodle")
     */
    public function index(): Response
    {
        $corsomoodle = $this -> getDoctrine() ->getRepository(MdlCourse::class)->findAll();
        return $this->render('corso_moodle/index.html.twig', array ('corsomoodle' => $corsomoodle)
        );
    }

    /**
     * @Route("/corsomoodle/{id}", name="CorsoMoodleSingolo")
     */

     public function singolo($id)
    {
       $corsomoodle = $this -> getDoctrine() ->getRepository(MdlCourse::class)->find($id);
        
        return $this->render('corso_moodle/singolo.html.twig', array ('corsomoodle' => $corsomoodle));
    }

      /**
     * @Route("/CouponAssegnati", name="CouponAssegnati")
     */

     public function php(): Response
    {
      $connection = $this -> getDoctrine() -> getManager() ->getConnection();
      $sql = 'SELECT
  mdl_block_coupon.id,
  mdl_block_coupon.submission_code,
  mdl_course.fullname,
  gest_account.username,
  mdl_user.username AS corsista,
  CostoCoupon.PrezzoCoupon
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
      $stmt = $connection -> prepare($sql);
      $stmt -> execute();

      
        return $this->render('corso_moodle/php.html.twig', array ('stmt' => $stmt));

    }

     /**
     * @Route("/admin/CouponAssegnati", name="CouponAssegnatiAdmin")
     */

     public function phpAdmin(): Response
    {
      $connection = $this -> getDoctrine() -> getManager() ->getConnection();
      $sql = 'SELECT
  mdl_block_coupon.id,
  mdl_block_coupon.submission_code,
  mdl_course.fullname,
  gest_account.username,
  mdl_user.username AS corsista,
  CostoCoupon.PrezzoCoupon
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
      $stmt = $connection -> prepare($sql);
      $stmt -> execute();

      
        return $this->render('corso_moodle/php.html.twig', array ('stmt' => $stmt));

    }


     /**
     * @Route("/CouponAssegnatiAll", name="CouponAssegnatiAll")
     */

     public function phpAll(): Response
    {
      $connection = $this -> getDoctrine() -> getManager() ->getConnection();
      $sql = 'SELECT
  mdl_block_coupon.id,
  mdl_block_coupon.submission_code,
  mdl_course.fullname,
  gest_account.username,
  mdl_user.username AS corsista,
  CostoCoupon.PrezzoCoupon
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


      //
      $form = $this->createForm(TrovaType::class, [
            'action' => $this->generateUrl('ricevo'),
            'method' => 'POST',
        ]);

        // leggo i campi nel twig      
        $form->get('OnOff')->getData();
        $form->get('OnOff')->setData(true);



      
        return $this->render('corso_moodle/phpAll.html.twig', array ('stmt' => $stmt, 'form' => $form  ));



    }

      
     /**
     * @Route("/admin/CouponAssegnatiAll", name="CouponAssegnatiAllAdmin")
     */

     public function phpAllAdmin(): Response
    {
      $connection = $this -> getDoctrine() -> getManager() ->getConnection();
      $sql = 'SELECT
  mdl_block_coupon.id,
  mdl_block_coupon.submission_code,
  mdl_course.fullname,
  gest_account.username,
  mdl_user.username AS corsista,
  CostoCoupon.PrezzoCoupon
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


      //
      $form = $this->createForm(TrovaType::class, [
            'action' => $this->generateUrl('ricevo'),
            'method' => 'POST',
        ]);

        // leggo i campi nel twig      
        $form->get('OnOff')->getData();
        $form->get('OnOff')->setData(true);



      
        return $this->render('corso_moodle/phpAll.html.twig', array ('stmt' => $stmt, 'form' => $form  ));



    }

}
