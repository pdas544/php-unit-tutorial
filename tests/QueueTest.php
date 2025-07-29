<?php
declare(strict_types=1);

use App\Queue;
use PHPUnit\Framework\TestCase;

final class QueueTest extends TestCase{
    public function testNewQueueIsEmpty(){
        $queue = new Queue();
        $this->assertSame(0, $queue->getSize());
    }

    public function testEnqueue(){
        $queue = new Queue();
        $queue->enqueue('John');
        $this->assertSame(1, $queue->getSize());
    }
}