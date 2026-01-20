<?php
class Voiture
{
    public function __construct(
        public string $marque,
        public float $vitesseMax
    )
    {
    }
}
$voiture1 = new Voiture("Toyota", 220);
var_dump($voiture1);