<?php


namespace Alura\DesignPattern\NotaFiscal;


use Alura\DesignPattern\ItemOrcamento;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    /**
     * ConstrutorNotaFiscal constructor.
     * @param NotaFiscal $notaFiscal
     */
    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial)
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocial = $razaoSocial;

        return $this;
    }

    public function comItem(ItemOrcamento $item)
    {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function comObservacoes(string $observacoes)
    {
        $this->notaFiscal->observacoes = $observacoes;

        return $this;
    }

    public function comDataEmissao(DateTimeImmutable $dataEmissao)
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;

        return $this;
    }

    abstract public function constroi(): NotaFiscal;
}