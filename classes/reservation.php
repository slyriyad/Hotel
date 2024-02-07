<?php

class Reservation {
    private Client $client;
    private Chambre $chambre;
    private DateTime $dateDebut;
    private DateTime $dateFin;


    public function __construct(Client $client, Chambre $chambre, string $dateDebut,string $dateFin) 
    {
        $this->client = $client;
        $this->chambre = $chambre;      
        $this->dateDebut = new DateTime($dateDebut);   
        $this->dateFin = new DateTime($dateFin);   
        $this->chambre->addReservation($this); 
        $this->client->addReservationClient($this); 
        $this->chambre->getHotel()->addReservationHotel($this);
        $this->chambre->setIsDisponible(false); 

    }

    
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

  
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    
    public function getDateFin()
    {
        return $this->dateFin;
    }

   
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

 
    public function getClient()
    {
        return $this->client;
    }

     
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

     
    public function getChambre()
    {
        return $this->chambre;
    }

    
    public function getHotel()
    {
        return $this->chambre->getHotel();
    }

    public function __toString()
    {
        return "du ".$this->dateDebut->format('d-m-Y')." au ".$this->dateFin->format('d-m-Y');
    }  
}