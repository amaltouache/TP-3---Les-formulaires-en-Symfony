<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;


final class ProductController extends AbstractController
{
    #[Route('/', name: 'product')]
     public function index(Request $request): Response
    {    $form = $this->createForm(ProductType::class);
       $form->handleRequest($request);



        return $this->render('product/index.html.twig', [
            'form'=>$form->createView(),
        ]);
    }
}

