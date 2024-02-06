<?php

class Chambre {
    private string $numChambre;
    private float $prix;
    private int $nbLits;
    private string $wifi;
    private bool $isDisponible;
    private Hotel $hotel;
    private array $reservations;

    public function __construct(string $numChambre, float $prix, int $nbLits, string $wifi, Hotel $hotel) 
    {
        $this->numChambre = $numChambre;
        $this->prix = $prix;
        $this->nbLits = $nbLits;
        $this->wifi = $nbLits;
        $this->isDisponible = true;
        $this->hotel = $hotel;
        $this->hotel->addChambre($this);     
    }

    
    
    public function getNumChambre()
    {
        return $this->numChambre;
    }

    
    
    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;

        return $this;
    }

    
   
    public function getPrix()
    {
        return $this->prix;
    }

    
     
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    
    
    public function getNbLits()
    {
        return $this->nbLits;
    }

    
     
    public function setNbLits($nbLits)
    {
        $this->nbLits = $nbLits;

        return $this;
    }

    
      
    public function getWifi()
    {
        return $this->wifi;
    }

    
     
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    
     
    public function isDisponible(DateTime $dateDisponibilite = new DateTime())
    {
        // en se basant sur la liste des réservations de cette chambre
        // voir si pour l'une d'entre elles la chambre est déjà réservée à cette date
        // si oui => return false
        // si non => return true
    }

}
