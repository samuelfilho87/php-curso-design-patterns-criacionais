<?php


namespace Alura\DesignPattern\Log;


class FileLogWritter implements LogWritter
{
    private $arquivo;

    /**
     * FileLogWritter constructor.
     * @param string $caminhoDoArquivo
     */
    public function __construct(string $caminhoDoArquivo)
    {
        $this->arquivo = fopen($caminhoDoArquivo, 'a+');
    }

    public function escreve(string $mensagemFormatada): void
    {
        fwrite($this->arquivo, $mensagemFormatada . PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}