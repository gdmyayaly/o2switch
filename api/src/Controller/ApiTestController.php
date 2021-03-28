<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiTestController extends AbstractController
{
    /**
     * @Route("/api/test", name="api_test")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiTestController.php',
        ]);
    }
    /**
     * @Route("/getrequest",name="getrequest", methods={"GET"})
     */
    public function getrequest(): Response{
        return $this->json([
            'message' => 'Request Get'
        ]);
    }
}
