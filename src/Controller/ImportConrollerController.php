<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImportConrollerController extends AbstractController
{
    #[Route('/import/conroller', name: 'app_import_conroller')]
    public function index(): Response
    {
        return $this->render('import_conroller/index.html.twig', [
            'controller_name' => 'ImportConrollerController',
        ]);
    }
}
