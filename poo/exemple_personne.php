<?php

class Personne
{
    protected string $firstName;
    protected string $lastName;

    public function afficherNomComplet(): void
    {
        echo $this->firstName. " ".$this->lastName;
    }
    

    /**
     * Get the value of firstName
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
}

class Employe extends Personne
{
    protected string $poste;

    public function afficherNomComplet(): void
    {
        echo $this->firstName. " ".$this->lastName. " ".$this->poste;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of poste
     */
    public function getPoste(): string
    {
        return $this->poste;
    }

    /**
     * Set the value of poste
     */
    public function setPoste(string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }
}

$personne1 = new Personne();
$personne1->setFirstName("John");
$personne1->setLastName("Doe");
//$personne1->afficherNomComplet();

$employe1 = new Employe();
$employe1->setFirstName("Sarah");
$employe1->setLastName("Dupond");
$employe1->setPoste("Développeuse Javascript");
$employe1->afficherNomComplet();