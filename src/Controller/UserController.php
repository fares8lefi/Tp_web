<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/user/{name}', name: 'app_user')]
    public function usernameDisplay(String $name): Response
    {
         $age=30;
        return $this->render('user/index.html.twig', [
            'name' => $name,
            'age' => $age,
        ]);
    }

     #[Route('/rederict', name: 'redircet')]
    public function redirectfunction(): Response
    {
        return $this->redirectToRoute('app_user',['name'=>'ahmed']);
    }

}
