<?php


namespace Alura\DesignPattern\Vendas;


abstract class Venda
{
    public \DateTimeInterface $dataRealizacao;

    /**
     * Venda constructor.
     * @param \DateTimeInterface $dataRealizacao
     */
    public function __construct(\DateTimeInterface $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }


}