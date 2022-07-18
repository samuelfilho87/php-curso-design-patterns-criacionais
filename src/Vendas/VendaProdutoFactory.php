<?php


namespace Alura\DesignPattern\Vendas;


use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Imposto;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoDoProduto;

    /**
     * VendaProdutoFactory constructor.
     * @param int $pesoDoProduto
     */
    public function __construct(int $pesoDoProduto)
    {
        $this->pesoDoProduto = $pesoDoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaDeProduto(new \DateTimeImmutable(), $this->pesoDoProduto);
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }
}