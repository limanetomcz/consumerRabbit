<?php

namespace Consumer\Consumers;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Message\AMQPMessage;

class UserQueueConsumer extends RabbitMQConsumer
{
    public function __construct(AbstractConnection $connection, AMQPChannel $channel)
    {
        parent::__construct($connection, $channel);
    }

    protected function getQueueName(): string
    {
        return 'user_queue';
    }

    protected function processMessage(AMQPMessage $msg): void
    {
        echo ' [x] Received ', $msg->body, "\n";
        // Processar a mensagem da fila 'user_queue' aqui
    }
}