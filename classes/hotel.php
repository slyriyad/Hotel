<?php

class Hotel {
    private string $nom;
    private string $adresse;
    private string $codePostale;
    private string $ville ;
    private array $ensembleChambres;

    public function __construct(string $nom, string $adresse, string $codePostale, string $ville) 
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->$codePostale = $codePostale;
        $this->ville = $ville;
        $this->ensembleChambres = [] ;      
    }
}