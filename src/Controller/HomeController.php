<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     * @param CallApiService $callApiService
     * @return Response
     */
    public function index(CallApiService $callApiService): Response
    {
        $data = $callApiService->getFranceData();

        return $this->render('home/index.html.twig', ['data' => $callApiService->getFranceData()]);
    }
}
