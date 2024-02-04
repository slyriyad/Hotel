<?php

class Chambre {
    private string $numChambre;
    private float $prix;
    private DateTime $nbLits;
    private string $wifi;
    private bool $isDisponible;
    private array $ensembleComptes;

    public function __construct(string $numChambre, float $prix, string $nbLits, string $wifi) 
    {
        $this->numChambre = $numChambre;
        $this->prix = $prix;
        $this->nbLits = $nbLits;
        $this->wifi = $nbLits;
        $this->isDisponible = true ;
        $this->ensembleComptes = [] ;      
    }
}