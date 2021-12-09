<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController {
   
   /**
    * @Route("/", name="home")
    */
   public function home() {
      $message = "bonjour tout le monde";
      
      return $this->render('home.html.twig', ['message' => $message]);
   }
}

