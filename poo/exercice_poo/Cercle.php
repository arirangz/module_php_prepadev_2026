<?php

require_once "Forme.php";

class Cercle extends Forme
{
    protected float $rayon;

    public function calculerSurface(): float
    {
        $calculRayon = pi() * $this->rayon ** 2;
        return round($calculRayon, 2);
    }

    /**
     * Get the value of rayon
     */
    public function getRayon(): float
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     */
    public function setRayon(float $rayon): self
    {
        $this->rayon = $rayon;

        return $this;
    }

}