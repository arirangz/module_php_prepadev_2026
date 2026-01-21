<?php

abstract class Forme
{
    protected string $couleur;

    abstract function calculerSurface(): float;

    /**
     * Get the value of couleur
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     */
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }
}
