<?php

// Removed the use statement to cause a class reference error
// use NotificationException;


class NotificationService
{
    /**
     * @param Mailer $mailer
     */
    public function __construct(private Mailer $mailer)
    {

    }

    public function sendNotification(string $to, string $body): bool
    {

        $subject = 'New message';
        try {
            return $this->mailer->sendEmail($to, $subject, $body);
        } catch (\RuntimeException $e) {
            throw new NotificationException('Could not send message', 0, $e);
        }
        return true;
    }
}
