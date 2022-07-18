<?php


namespace Alura\DesignPattern\Vendas;


use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Impostos\Iss;
use DateTimeImmutable;

class VendaServicoFactory implements VendaFactory
{
    private string $nomePrestador;

    /**
     * VendaServicoFactory constructor.
     * @param string $nomePrestador
     */
    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaDeServico(new DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new Iss();
    }
}