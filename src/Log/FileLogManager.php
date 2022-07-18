<?php


namespace Alura\DesignPattern\Log;


class FileLogManager extends LogManager
{
    private string $caminhoDoArquivo;

    /**
     * FileLogManager constructor.
     * @param string $caminhoDoArquivo
     */
    public function __construct(string $caminhoDoArquivo)
    {
        $this->caminhoDoArquivo = $caminhoDoArquivo;
    }

    public function criarLogWritter(): LogWritter
    {
        return new FileLogWritter($this->caminhoDoArquivo);
    }
}