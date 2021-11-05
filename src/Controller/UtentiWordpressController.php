<?php

namespace App\Controller;

use App\Entity\Utentiwordpress;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtentiWordpressController extends AbstractController
{
    /**
     * @Route("/utentiwordpress", name="utenti_wordpress")
     */
    public function index(): Response
    {
         $UtentiWordpress = $this -> getDoctrine() -> getRepository(Utentiwordpress::class)->findAll();

        return $this->render('utenti_wordpress/index.html.twig', [
            'UtentiWordpress' => $UtentiWordpress,
        ]);
    }

     /**
     * @Route("/utentiwordpressMini", name="utenti_wordpress_mini")
     */
    public function mini(): Response
    {

       

        // $UtentiWordpress = $this -> getDoctrine() -> getRepository(Utentiwordpress::class)->findAll();
        $UtentiWordpress = $this -> getDoctrine() -> getRepository(Utentiwordpress::class)->findBy(
    array('importato' => 'no'));
        return $this->render('utenti_wordpress/base.html.twig', [
          'UtentiWordpress' => $UtentiWordpress,
        ]);
    }

     /**
     * @Route("/UtentiWpSingolo/{id}", name="UtentiWpSingolo")
     */
    public function singolo($id)
    {
        $id = $this -> getDoctrine() -> getRepository(Utentiwordpress::class)->findBy([
            'id' => $id
        ]);
        
        return $this->render('utenti_wordpress/singolo.html.twig', array ('id' => $id));
    }

}
