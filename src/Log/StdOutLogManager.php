<?php


namespace Alura\DesignPattern\Log;


class StdOutLogManager extends LogManager
{

    public function criarLogWritter(): LogWritter
    {
        return new StdOutLogWritter();
    }
}