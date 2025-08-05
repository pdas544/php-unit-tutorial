<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NotificationServiceTest extends TestCase{
    public function testSendNotification(): void{
        $mailer = new Mailer;
        $service = new NotificationService($mailer);
        $this->assertTrue($service->sendNotification('john@example.com','Hello World'));
    }
}