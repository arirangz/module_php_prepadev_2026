<?php
class Rectangle
{
    protected string $couleur;
    protected float $longueur;
    protected float $largeur;

    public function calculerSurface(): float
    {
        return $this->longueur * $this->largeur;
    }

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

    /**
     * Get the value of longueur
     */
    public function getLongueur(): float
    {
        return $this->longueur;
    }

    /**
     * Set the value of longueur
     */
    public function setLongueur(float $longueur): self
    {
        if ($longueur < 0) {
            $this->longueur = 0;
        } else {
            $this->longueur = $longueur;
        }

        return $this;
    }

    /**
     * Get the value of largeur
     */
    public function getLargeur(): float
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     */
    public function setLargeur(float $largeur): self
    {
        if ($largeur < 0) {
            $this->largeur = 0;
        } else {
            $this->largeur = $largeur;
        }

        return $this;
    }
}
