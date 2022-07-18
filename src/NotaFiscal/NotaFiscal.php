<?php


namespace Alura\DesignPattern\NotaFiscal;


use Alura\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocial;
    public array $itens;
    public string $observacoes;
    public \DateTimeImmutable $dataEmissao;
    public float $valorImpostos;

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, ItemOrcamento $itemAtual) => $valorAcumulado + $itemAtual->valor,
            0);
    }

    public function clonar(): NotaFiscal
    {
        $cloneNotaFiscal = new NotaFiscal();
        $cloneNotaFiscal->cnpj = $this->cnpj;
        $cloneNotaFiscal->razaoSocial = $this->razaoSocial;
        $cloneNotaFiscal->itens = $this->itens;
        $cloneNotaFiscal->observacoes = $this->observacoes;
        $cloneNotaFiscal->dataEmissao = $this->dataEmissao;
        $cloneNotaFiscal->valorImpostos = $this->valorImpostos;

        return $cloneNotaFiscal;
    }

    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}