<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoverageConrollerController extends AbstractController
{
    #[Route('/coverage/conroller', name: 'app_coverage_conroller')]
    public function index(): Response
    {
        return $this->render('coverage_conroller/index.html.twig', [
            'controller_name' => 'CoverageConrollerController',
        ]);
    }
}
