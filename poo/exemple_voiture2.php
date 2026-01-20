<?php
class Voiture
{
    public string $marque;
    public float $vitesseMax;

    public function __construct(string  $marque, float $vitesseMax)
    {
        $this->marque = $marque;
        $this->vitesseMax = $vitesseMax;
    }

    public function klaxonner(): void
    {
        echo "Bip bip!";
    }
}

$voiture1 = new Voiture("Toyota", 275);
var_dump($voiture1);

$voiture2 = new Voiture("Peugeot", 210);
var_dump($voiture2);
