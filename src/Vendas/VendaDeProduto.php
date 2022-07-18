<?php


namespace Alura\DesignPattern\Vendas;


class VendaDeProduto extends Venda
{
    /**
     * @var int Peso do produto em gramas
     */
    private int $pesoDoProduto;

    public function __construct(\DateTimeInterface $dataRealizacao, int $pesoDoProduto)
    {
        parent::__construct($dataRealizacao);
        $this->pesoDoProduto = $pesoDoProduto;
    }
}