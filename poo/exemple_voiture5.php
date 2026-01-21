<?php

class Vehicule 
{
    protected string $marque;
    protected float $vitesseMax;

    public function sayHello():void
    {
        echo "Hello";
    }

    /**
     * Get the value of marque
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of vitesseMax
     */
    public function getVitesseMax(): float
    {
        return $this->vitesseMax;
    }

    /**
     * Set the value of vitesseMax
     */
    public function setVitesseMax(float $vitesseMax): self
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }
}



class Voiture extends Vehicule
{
    protected int $nombreRoues;
}
class Bateau
{
    protected int $nombreCabines;
}


$voiture1 = new Voiture();
$voiture1->setMarque("Toyota");

echo $voiture1->getMarque();
