<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\RegisterType;

class RegisterController extends AbstractController
{
    #[Route('/', name: 'app_register')]
    public function index(): Response
    {
        
        return $this->render("frontend/layout.html.twig");
    }

    #[Route('/form', name: 'form')]
    public function registration_form()
    {
        $register = $this->createForm(RegisterType::class);
        return $this->renderForm('register/register.html.twig', [
            'form' => $register,
        ]);
    }
}
