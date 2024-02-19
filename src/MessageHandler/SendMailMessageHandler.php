<?php

namespace App\MessageHandler;

use App\Message\SendMailMessage;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class SendMailMessageHandler 
{
    public function __construct( private  MailerInterface $mailer)
    {
        $this->mailer =  $mailer;
    }

    public function __invoke(SendMailMessage $message)
    {
        $email = (new Email())
        ->from($message->getEmail())
        ->to('admin@my-incident.io')
        ->subject('New Incident #' . $message->getDescription() . ' - ' . $message->getName())
        ->html('<p>' . $message->getDescription() . '</p>');

 
        $this->mailer->send($email);
        // do something with your message
    }
}
