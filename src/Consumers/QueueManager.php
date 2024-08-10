<?php

namespace Consumer\Consumers;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use Consumer\Consumers\UserQueueConsumer;
// use YourNamespace\Consumers\OrderQueueConsumer;

class QueueManager
{
    private $connection;
    private $channel;

    public function __construct()
    {
        // Cria a conexão e o canal uma vez
        $this->connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $this->channel = $this->connection->channel();
    }

    public function startConsumers()
    {
        // Inicializa e executa o consumidor de fila de usuários
        $userQueueConsumer = new UserQueueConsumer($this->connection, $this->channel);
        $userQueueConsumer->consume();

        // Se precisar adicionar mais consumidores, basta instanciá-los e chamar o método consume
        // $orderQueueConsumer = new OrderQueueConsumer($this->connection, $this->channel);
        // $orderQueueConsumer->consume();
    }

    public function __destruct()
    {
        // Fecha o canal e a conexão quando o gerenciador for destruído
        $this->channel->close();
        $this->connection->close();
    }
}