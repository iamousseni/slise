<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComponentsController extends AbstractController
{
    public function menu(): Response
    {

        return $this->render('components/menu.html.twig', [
            'controllerName' => 'ComponentsController'
        ]);
    }
}
