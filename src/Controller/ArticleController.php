<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController {
   
   /**
    * @Route("/articles", name="articles")
    */
   public function articles() {
      
      $articles = [
         1 => [
            "title" => "article 1",
            "content" => "contenu de l'article 1",
            "image" => "https://picsum.photos/200",
            "id" => 1
         ],
         2 => [
            "title" => "article 2",
            "content" => "contenu de l'article 2",
            "image" => "https://picsum.photos/200",
            "id" => 2
         ],
         3 => [
            "title" => "article 3",
            "content" => "contenu de l'article 3",
            "image" => "https://picsum.photos/200",
            "id" => 3
         ]
         ];
      
      return $this->render('articles.html.twig', ['articles' => $articles]);
   }

   /**
    * @Route("/article/{id}", name="article")
    *
    * @return void
    */
   public function article($id) {

      $articles = [
         1 => [
            "title" => "article 1",
            "content" => "contenu de l'article 1",
            "image" => "https://picsum.photos/600",
            "id" => 1
         ],
         2 => [
            "title" => "article 2",
            "content" => "contenu de l'article 2",
            "image" => "https://picsum.photos/600",
            "id" => 2
         ],
         3 => [
            "title" => "article 3",
            "content" => "contenu de l'article 3",
            "image" => "https://picsum.photos/600",
            "id" => 3
         ]
         ];
         
      return $this->render('article.html.twig', ['article' => $articles[$id]]);
   }
}