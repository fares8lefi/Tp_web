<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthorController extends AbstractController
{
    #[Route('/showAuthor/{name}', name: 'app_author')]
    public function showAuthor(String $name): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
            'name' => $name,
        ]);
    }

    #[Route('/listAuthors', name: 'list_author')]
    public function listAuthors(): Response
    {
        return $this->render('author/list.html.twig', [
            'controller_name' => 'AuthorController',
            'authors' => $authors = array(

                array('id' => 1, 'picture' => '/public/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
                array('id' => 2, 'picture' => '/public/images/william-shakespeare.jpeg','username' => ' William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
                array('id' => 3, 'picture' => '/public/images/Taha_Hussein.jpeg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),

)
        ]);
    }
}


