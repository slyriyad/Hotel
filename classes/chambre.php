<?php

class Chambre {
    private string $numChambre;
    private float $prix;
    private int $nbLits;
    private string $wifi;
    private bool $isDisponible = true;
    private Hotel $hotel;
    private array $reservations;

    public function __construct(string $numChambre, float $prix, int $nbLits, string $wifi, Hotel $hotel) 
    {
        $this->numChambre = $numChambre;
        $this->prix = $prix;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->hotel = $hotel;
        $this->hotel->addChambre($this);     
        $this->reservations = [] ;  
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


    public function getIsDisponible(): Bool
    {
        return $this->isDisponible;
    }

    
    public function setIsDisponible($isDisponible)
    {
        $this->isDisponible = $isDisponible;

        return $this;
    }



    public function getHotel()
    {
        return $this->hotel;
    }


    public function __toString(){
        return "Chambre : .".$this->numChambre."(".$this->nbLits." lits - ".$this->prix."€ - wifi : ".$this->wifi.") ";
    }
    
     
    public function isDisponible(DateTime $dateDisponibilite = new DateTime())
    {
        // en se basant sur la liste des réservations de cette chambre
        // voir si pour l'une d'entre elles la chambre est déjà réservée à cette date
        // si oui => return false
        // si non => return true
    }
    public function afficherEtat()
    {
        if($this->isDisponible){
            return "<p class='etat1'>disponible</p>";
        } else{
            return "<p class='etat2' >reservé</p>";
        }
    }

    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }


    public function affInfoResaHot()
    {
        foreach($this->reservations as $resa){
            echo $resa ;
        }
    }

}
   

