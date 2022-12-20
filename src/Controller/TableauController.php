<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableauController extends AbstractController
{
    #[Route('/tableau', name: 'app_tableau')]
     public function detail() :Response
    {
$info = ['Loper', 'Dave', 'daveloper@code.dom', '01/01/1970'];

        // affichage de la page d'accueil
        return $this->render('tableau/tableau.html.twig', [
            'informations' => $info
        ]);
    }
}