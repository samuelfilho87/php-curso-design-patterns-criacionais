<?php

use Alura\DesignPattern\Log\{StdOutLogManager, FileLogManager};

require 'vendor/autoload.php';

$logManager = new StdOutLogManager();

$logManager->log('info', 'Testando log manager.');

$logManager2 = new FileLogManager(__DIR__.'/log');

$logManager2->log('info', 'Testando log manager.');