<?php
namespace App\Controller;

use \Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class LunchController
{
    public function __construct()
    {

    }

    /**
     * @Route("/lunch/", name="get_lunch", methods={"GET"})
     */
    public function getLunch(): JsonResponse
    {

        return new JsonResponse(['status' => 'Lumch created!']);
    }
}