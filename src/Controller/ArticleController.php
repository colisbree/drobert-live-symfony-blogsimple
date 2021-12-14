<?php
namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController {
   
   /**
    * @Route("/articles", name="articles")
    */
   public function articles(ArticleRepository $articleRepository) {
      
      // la classe repository permet de faire des requêtes SELECT dans la table articles
      // je dois donc instancier la classe ArticleRepository pour pour utiliser une des 4 méthodes
      // FIND / FIND ALL / FIND BY / FIND ONE BY
      $articles = $articleRepository->findAll();
      
      return $this->render('articles.html.twig', ['articles' => $articles]);
   }

   /**
    * @Route("/article/{id}", name="article")
    */
   public function article($id, ArticleRepository $articleRepository) {

      $article = $articleRepository->find($id);
         
      return $this->render('article.html.twig', ['article' => $article]);
   }

   /**
    * @Route("/search-results", name="search")
    */
   public function searchArticle(Request $request, ArticleRepository $articleRepository){
      $search = $request->query->get('search'); // cette ligne ne fonctionne pas en méthode post
      //$search = $request->get('search');      // cette ligne fonctionne en méthode post
      
      $articles=$articleRepository->searchArticle($search);
      
      return $this->render('search_articles.html.twig', [
         'articles' => $articles,
         'search' => $search
      ]);
   }
}