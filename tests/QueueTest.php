<?php
declare(strict_types=1);

use App\Queue;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Depends;

final class QueueTest extends TestCase{
    public function testNewQueueIsEmpty(): Queue{
        $queue = new Queue();
        $this->assertSame(0, $queue->getSize());

        return $queue;
    }

    #[Depends('testNewQueueIsEmpty')]
    public function testEnqueue(Queue $queue): Queue{

        $queue->enqueue('John');
        $this->assertSame(1, $queue->getSize());

        return $queue;
    }

    #[Depends('testEnqueue')]
    public function testDequeueAndReturn(Queue $queue): void{

        $this->assertSame('John', $queue->dequeue());

    }
}