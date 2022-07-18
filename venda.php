<?php

use Alura\DesignPattern\Vendas\VendaServicoFactory;
use Alura\DesignPattern\Log\{StdOutLogManager, FileLogManager};

require 'vendor/autoload.php';

$fabricaVenda = new VendaServicoFactory('Samuel');
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();