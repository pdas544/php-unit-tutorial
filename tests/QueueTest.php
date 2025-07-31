<?php

/***
 * Fixtures: These are used at each test is run - two methods are available
 * - setUp(): run before each test
 * - tearDown(): run after each test for clearing resources.
 *
 */
declare(strict_types=1);

use App\Queue;
use PHPUnit\Framework\TestCase;

final class QueueTest extends TestCase{

    private Queue $queue;


    protected function setUp(): void{
        $this->queue = new Queue();
    }
    public function testNewQueueIsEmpty(): void{

        $this->assertSame(0, $this->queue->getSize());


    }


    public function testEnqueue(): void{

        $this->queue->enqueue('John');
        $this->assertSame(1, $this->queue->getSize());

    }


    public function testDequeueAndReturn(): void{

        $this->queue->enqueue('John');
        $this->assertSame('John', $this->queue->dequeue());

    }

    public function testDequeueThrowsException(): void{
        $this->expectException(\UnderflowException::class);
        $this->queue->dequeue();
    }
}