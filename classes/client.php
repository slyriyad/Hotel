<?php

class Client {
    private string $nom;
    private string $prenom;
    private array $reservationsClient;
    // private Hotel $hotel;
    // private Reservation $reservation;
    // private Chambre $chambre;

    public function __construct(string $nom, string $prenom) 
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        // $this->hotel = $hotel;
        // $this->reservation = $reservation;
        // $this->chambre = $chambre;
        $this->reservationsClient = [] ;
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


    public function addReservationClient(Reservation $reservationClient)
    {
        $this->reservationsClient[] = $reservationClient;
    }


    public function affInfoResaclient()
    {   $result = "<br><strong style='font-size: 20px;'>Réservation de ".$this."</strong><br>
        <p>".count($this->reservationsClient)." réservations</p>
        ";
        foreach($this->reservationsClient as $resa){
            $result .=
            "<b>Hotel : ". $resa->getHotel() ."</b>/". $resa->getChambre() . $resa ."<br>";


        }
        $result .= "Total : ".$this->prixTotal()." €<br>";
        return $result;
    }

    public function prixTotal()
    {    
        $total = 0;
        foreach ($this->reservationsClient as $reservation) {
            $diff = date_diff($reservation->getDateDebut(), $reservation->getDateFin());
            $nbJours = $diff->format("%d");
            $prixSejour = $nbJours * $reservation->getChambre()->getPrix();
            $total += $prixSejour;
        }
        return $total;
    }
    
}