<?php

class Voiture {
    public string $marque;
    public float $vitesseMax;

    public function klaxonner():void
    {
        echo "Bip bip!";
    }
}
$voiture1 = new Voiture();
$voiture1->marque= "Toyota";
$voiture1->vitesseMax=200;
$voiture1->klaxonner();
var_dump($voiture1);

$voiture2 = new Voiture();
$voiture2->marque = "Peugot";
$voiture2->vitesseMax = 210;
var_dump($voiture2);