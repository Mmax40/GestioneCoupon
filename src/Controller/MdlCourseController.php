<?php

namespace App\Controller;

use App\Entity\MdlCourse;
use App\Form\MdlCourseType;
use App\Repository\CorsoMoodleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mdl/course")
 */
class MdlCourseController extends AbstractController
{
    /**
     * @Route("/", name="mdl_course_index", methods={"GET"})
     */
    public function index(CorsoMoodleRepository $corsoMoodleRepository): Response
    {
        return $this->render('mdl_course/index.html.twig', [
            'mdl_courses' => $corsoMoodleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="mdl_course_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mdlCourse = new MdlCourse();
        $form = $this->createForm(MdlCourseType::class, $mdlCourse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mdlCourse);
            $entityManager->flush();

            return $this->redirectToRoute('mdl_course_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('mdl_course/new.html.twig', [
            'mdl_course' => $mdlCourse,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="mdl_course_show", methods={"GET"})
     */
    public function show(MdlCourse $mdlCourse): Response
    {
        return $this->render('mdl_course/show.html.twig', [
            'mdl_course' => $mdlCourse,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="mdl_course_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MdlCourse $mdlCourse): Response
    {
        $form = $this->createForm(MdlCourseType::class, $mdlCourse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mdl_course_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('mdl_course/edit.html.twig', [
            'mdl_course' => $mdlCourse,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="mdl_course_delete", methods={"POST"})
     */
    public function delete(Request $request, MdlCourse $mdlCourse): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mdlCourse->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mdlCourse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mdl_course_index', [], Response::HTTP_SEE_OTHER);
    }
}
