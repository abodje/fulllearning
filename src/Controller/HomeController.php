<?php

namespace App\Controller;

use App\Message\SendMailMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;
use Symfony\Component\Messenger\MessageBusInterface;

class HomeController extends AbstractController
{

     
    
    #[Route('/home', name: 'app_home')]
    public function index(Request $request,MessageBusInterface $bus): Response
    {

        $bus->dispatch(new SendEmailMessage("paul", "abodjekouamepaularnaud@gmail.com", "test"));
        dd($bus);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
