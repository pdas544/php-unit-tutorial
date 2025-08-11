<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Test Stub: createstub() method is used to create a test stub which creates an object of the class
 * passed as an argument.
 *
 * 1) NotificationService class which is being test depends on the Mailer class which is
 * created using a stub object by calling the createStub() method
 *
 * 2) modify the behavior of test double method using method() on the stub object
 * 3) We can test the NotificationService class without worrying about any dependencies
 *
 * 4) use the stub to throw custom exception and message
 *
 * Mocks: are used when we need to check how a method is called. - for eg: once, atMost(), atLeat()
 */

final class NotificationServiceTest extends TestCase{
    public function testSendNotification(): void
    {
        $mailer = $this->createstub(Mailer::class);
        $mailer->method('sendEmail')->willReturn(true);
        $service = new NotificationService($mailer);
        $this->assertTrue($service->sendNotification('john@example.com', 'Hello World'));
    }
    public function testSendNotificationThrowsException(): void
    {
        $mailer = $this->createstub(Mailer::class);
        $mailer->method('sendEmail')->willThrowException(new RuntimeException('SMTP Server Down'));

        $service = new NotificationService($mailer);

        $this->expectException(NotificationException::class);

        $this->expectExceptionMessage('Could not send message');

        $service->sendNotification('jane@example.com', 'Hello World');
    }

    public function testMailerIsCalledSuccessfully(): void{
    $mailer= $this->createmock(Mailer::class);
    $mailer->expects($this->once())->method('sendEmail')->willReturn(true);
    $service = new NotificationService($mailer);
    $this->assertTrue($service->sendNotification('jane@example.com', 'Hello World'));
    }

}