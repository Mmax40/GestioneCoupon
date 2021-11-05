<?php

namespace App\Controller;

use App\Entity\Costocoupon;
use App\Form\Costocoupon1Type;
use App\Repository\CostoCouponRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gestioneCoupon")
 */
class CostoCouponCrudController extends AbstractController
{
    /**
     * @Route("/", name="costo_coupon_crud_index", methods={"GET"})
     */
    public function index(CostoCouponRepository $costoCouponRepository): Response
    {

        
        return $this->render('costo_coupon_crud/index.html.twig', [
            'costocoupons' => $costoCouponRepository->findAll(),
        ]);
    }

    

    /**
     * @Route("/new", name="costo_coupon_crud_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $costocoupon = new Costocoupon();
        $form = $this->createForm(Costocoupon1Type::class, $costocoupon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($costocoupon);
            $entityManager->flush();

            return $this->redirectToRoute('costo_coupon_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('costo_coupon_crud/new.html.twig', [
            'costocoupon' => $costocoupon,
            'form' => $form,
        ]);
    }

    
  

    /**
     * @Route("/{id}", name="costo_coupon_crud_show", methods={"GET"})
     */
    public function show(Costocoupon $costocoupon): Response
    {
        return $this->render('costo_coupon_crud/show.html.twig', [
            'costocoupon' => $costocoupon,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="costo_coupon_crud_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Costocoupon $costocoupon): Response
    {
        $form = $this->createForm(Costocoupon1Type::class, $costocoupon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('costo_coupon_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('costo_coupon_crud/edit.html.twig', [
            'costocoupon' => $costocoupon,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="costo_coupon_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Costocoupon $costocoupon): Response
    {
        if ($this->isCsrfTokenValid('delete'.$costocoupon->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($costocoupon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('costo_coupon_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
