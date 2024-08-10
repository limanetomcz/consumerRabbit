<?php

namespace Consumer\Consumers;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Message\AMQPMessage;

abstract class RabbitMQConsumer
{
    protected $connection;
    protected $channel;

    public function __construct(AbstractConnection $connection, AMQPChannel $channel)
    {
        $this->connection = $connection;
        $this->channel = $channel;
    }

    abstract protected function getQueueName(): string;

    abstract protected function processMessage(AMQPMessage $msg): void;

    public function consume(): void
    {
        $this->channel->queue_declare($this->getQueueName(), false, true, false, false);

        echo " [*] Waiting for messages in " . $this->getQueueName() . ". To exit press CTRL+C\n";

        $callback = function ($msg) {
            $this->processMessage($msg);
        };

        $this->channel->basic_consume($this->getQueueName(), '', false, true, false, false, $callback);

        while ($this->channel->is_consuming()) {
            $this->channel->wait();
        }
    }
}