<?php


namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(ProductRepository $repo): Response
    {
        $bikes = $repo->findBy([]);
        return $this->render('homepage.html.twig', [
            'bikes' => $bikes
        ]);
    }
}
