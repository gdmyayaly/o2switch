<?php

namespace App\Controller;

use App\Api\ApiRoute;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @ApiRoute(defaults={"_is_api": true})
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
