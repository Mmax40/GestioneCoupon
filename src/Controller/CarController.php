<?php

namespace App\Controller;

use App\Entity\Car;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Form\CarType;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\CarRepository;

class CarController extends AbstractController
{
    /**
     * @Route("/car", name="car")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response

     */
    public function index( Request $request, EntityManagerInterface $entityManager, CarRepository $carRepository)
    {
        /** @var Car $car */
  

        $car = new Car();
        
        
       $formCar =  $this->createForm(CarType::class, $car);
       $formCar ->HandleRequest($request);

       if ($formCar ->isSubmitted() && $formCar->isValid()) {
        /** @var Car $car */
        $car =$formCar ->getData();
        $entityManager->persist($car);
        $entityManager ->flush();
        }


        $cars = $carRepository ->findAll();

        $carOne = $carRepository ->find(1);

        $carFiat = $carRepository ->findBy([
            'brand' => 'fiat'
        ]);


        return $this->render('car/index.html.twig', [
            'cars' => $cars,
            'carOne' => $carOne,
            'carFiat' => $carFiat,

            'controller_name' => 'CarController',
            'formCar' => $formCar->createView() ,
        ]);
    }

}
