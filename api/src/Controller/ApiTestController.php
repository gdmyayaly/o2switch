<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/api")
 */
class ApiTestController extends AbstractController
{
    /**
     * @Route("/get",name="getrequest", methods={"GET"})
     */
    public function getrequest(): Response{
        return $this->json([
            'message' => 'Request Get'
        ]);
    }
    /**
     * @Route("/post",name="postrequest", methods={"POST"})
     */
    public function postrequest(): Response{
        return $this->json([
            'message' => 'Request Post'
        ]);
    }
    /**
     * @Route("/put",name="putrequest", methods={"PUT"})
     */
    public function putrequest(): Response{
        return $this->json([
            'message' => 'Request Put'
        ]);
    }
}
