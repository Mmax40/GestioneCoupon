<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MdlUser;
use App\Form\UtentiMoodleType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UtentiMoodleController extends AbstractController
{
     /**
     * @Route("/utentimoodle", name="utenti_moodle")
     */
public function index(): Response
    {
         $UtentiMoodle = $this -> getDoctrine() -> getRepository(MdlUser::class)->findAll();

        return $this->render('utenti_moodle/index.html.twig', [
            'UtentiMoodle' => $UtentiMoodle,
        ]);
    }


    /**
     * @Route("/utentimoodleInserisci", name="utenti_moodle_Inserisci")
     */
    public function new(Request $request): Response // inserisco parametro request per recuperare da url
    {
        

        // aggiungo due campi al modulo corrispondenti alle proprietà username e password dalla entity MdlUser class 
        $user = new MdlUser(); // nuovo oggetto dalla nostra entity e serve anche per la mappatura del form stesso

        // creo il form, se voglio posso passare anche la action come array
        // $form = $this -> createForm(UtentiMoodleType::class, $user, array( 'action' => $this ->generateUrl('utenti_moodle_Inserisci')));
       // $form = $this -> createForm(UtentiMoodleType::class, $user);
       $form = $this -> createForm(UtentiMoodleType::class, $user, array( 'action' => $this ->generateUrl('inserimento'))); 
       $form ->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('utenti_moodle_Inserisci', [], Response::HTTP_SEE_OTHER);
        }

            return $this->render('utenti_moodle/form.html.twig', 
        array('form' => $form->createView()));
    }


    

}
