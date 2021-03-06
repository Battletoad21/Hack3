<?php
/**
 * Created by PhpStorm.
 * User: zak
 * Date: 10/07/18
 * Time: 14:26
 */


namespace AppBundle\Service;


class Mailer
{
    private $mailer;
    private $templating;


    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;


    }

    public function sendEmail($email,$commune,$data)
    {



            $body = $this->templating->render('emails/send.html.twig', ['email' => $email, 'commune' => $commune, 'data' => $data]);


        $message = (new \Swift_Message('infoContact'))
            ->setFrom($email)
            ->setTo('caldex67@gmail.com')
            ->setBody($body, 'text/html');
        $this->mailer->send($message);
    }
}