<?php

class Reservation {
    private string $nom;
    private string $prenom;
    private DateTime $birthdate;
    private string $villeNaiss ;
    private array $ensembleComptes ;

    public function __construct(string $nom, string $prenom, string $birthdate, string $villeNaiss) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->birthdate = new Datetime($birthdate);
        $this->villeNaiss = $villeNaiss;
        $this->ensembleComptes = [] ;      
    }
}