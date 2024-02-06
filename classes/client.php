<?php

class Client {
    private string $nom;
    private string $prenom;

    public function __construct(string $nom, string $prenom) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
              
    }

    
    public function getNom()
    {
        return $this->nom;
    }

    
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function __toString()
    {
        return $this->prenom." ".$this->nom;
    }
}