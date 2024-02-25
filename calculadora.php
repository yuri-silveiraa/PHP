<?php

class Calculadora
{
    private float $value;

    public function __construct($valor = 0)
    {
        $this->value = $valor;
    }

    public function add(float $value): void
    {
        $this->value += $value;
    }

    public function sub(float $value): void
    {
        $this->value -= $value;
    }

    public function multiply(float $value): void
    {
        $this->value *= $value;
    }

    public function divide(float $value): void
    {
        $this->value /= $value;
    }

    public function total(): float
    {
        return $this->value;
    }
}

$calc = new Calculadora();
$calc->add(6);
$calc->sub(2);
$calc->divide(4);
$calc->multiply(2);
$calc->add(2);

echo $calc->total();
