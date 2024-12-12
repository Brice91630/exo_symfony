<?php
namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authorization\AuthorizationCheckerInterface;

#[Route('/articles')]
class ArticlesController extends AbstractController
{
    #[Route('/', name: 'article_index', methods: ['GET'])]
    public function index(ArticlesRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll(); // Récupère tous les articles

        return $this->render('article/index.html.twig', ['articles' => $articles]); // Affiche la liste des articles
    }
}
