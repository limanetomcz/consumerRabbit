<?php

use Consumer\Consumers\QueueManager;

require 'vendor/autoload.php';

$queueManager = new QueueManager();
$queueManager->startConsumers();