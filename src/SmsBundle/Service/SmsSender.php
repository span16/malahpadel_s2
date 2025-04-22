<?php
namespace App\SmsBundle\Service;

use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\Recipient\Recipient;
use Symfony\Component\Notifier\Bridge\Twilio\TwilioOptions;

class SmsSender
{
    private $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function send(string $message, string $phone): void
{
    $notification = (new Notification('Une nouvelle campagne a été créée avec succès. Veuillez la consulter.', ['sms']))
        ->content($message);

    // Envoyer sans options spécifiques
    $recipient = new Recipient('', $phone);
    $this->notifier->send($notification, $recipient);
}
    
}