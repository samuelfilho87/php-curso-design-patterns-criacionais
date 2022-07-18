<?php

use Alura\DesignPattern\Pedido\CriadorDePedido;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorDePedido();

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();

    $pedido = $criadorPedido->criaPedido("Samuel Damasceno Filho", date('Y-m-d'), $orcamento);

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
