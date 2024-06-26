<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => "Vous etes le maillon faible, au revoir !",
            'path' => 'src/Controller/HomeController.php',
        ]);
    }
}
