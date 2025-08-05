<?php


class NotificationService{
    /**
     * @param Mailer $mailer
     */
    public function __construct(private Mailer $mailer)
    {

    }
    public function sendNotification(string $to, string $body): bool{

        $subject = 'New message';
        return $this->mailer->sendEmail($to, $subject, $body);
    }
}