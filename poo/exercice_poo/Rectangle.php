<?php
class Rectangle
{
    public string $couleur;
    public float $longueur;
    public float $largeur;

    public function __construct(string $couleur, float $longueur, float $largeur)
    {
        $this->couleur = $couleur;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerSurface():float
    {
        return $this->longueur * $this->largeur;
    }
}