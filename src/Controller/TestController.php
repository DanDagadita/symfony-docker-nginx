<?php

namespace App\Controller;

use App\Entity\Test;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $test = new Test();
        $entityManager->persist($test);
        $entityManager->flush();
        dd($test);
        return new Response('Hello');
    }
}
