<?php



class Mailer{
    public function sendEmail(string $to, string $subject, string $body): bool{
            // Don't output during tests to avoid "risky" test warnings
            // echo 'sending email to ' . $to;

            sleep(3);

            return true;
    }
}