<?php
namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminArticleController extends AbstractController {

   /**
    * @Route("/admin/articles/", name="admin_articles")
    */
   public function listArticles(ArticleRepository $articleRepository) {

      $articles = $articleRepository->findAll();

      return $this->render('admin/articles.html.twig', [
         'articles' => $articles
      ]);
   }
}