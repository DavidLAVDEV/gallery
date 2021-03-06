<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ModelController extends AbstractController
{
    /**
     * @Route("/model", name="model")
     */
    public function index()
    {
        return $this->render('model/model.html.twig', [
            'controller_name' => 'Controller de démonstration',
        ]);
    }
}
