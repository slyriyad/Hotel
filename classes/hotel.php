<?php

class Hotel {
    private string $nom;
    private int $nbEtoiles;
    private string $adresse;
    private string $codePostale;
    private string $ville ;
    private array $chambres;
    private array $reservationsHotel;

    public function __construct(string $nom,int $nbEtoiles, string $adresse, string $codePostale, string $ville) 
    {
        $this->nom = $nom;
        $this->nbEtoiles = $nbEtoiles;
        $this->adresse = $adresse;
        $this->codePostale = $codePostale;
        $this->ville = $ville;
        $this->chambres = [] ; 
        $this->reservationsHotel = [];  
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
    

    public function getNbEtoiles()
    {
            return $this->nbEtoiles;
    }

   
    public function setNbEtoiles($nbEtoiles)
    {
        $this->nbEtoiles = $nbEtoiles;

        return $this;
        
    }
    

    public function getAdresse()
    {
        return $this->adresse;
    }

  
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

     
    public function getCodePostale()
    {
        return $this->codePostale;
    }


    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    
    public function getVille()
    {
        return $this->ville;
    }

 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }


    public function getChambres()
    {
        return $this->chambres;
    }

    
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }


    public function __toString()
    {
        return $this->nom." ".$this->nbEtoiles()." ".$this->ville;
    }


    public function nbEtoiles() 
    {
        // Le caractère que vous souhaitez répéter
        $caractere= "";

        // Boucle pour répéter le caractère
        for ($i = 0; $i < $this->nbEtoiles; $i++) {
        $caractere .="*";
        }
        return $caractere;
    }


    public function addChambre(Chambre $chambre)
    {
        $this->chambres[] = $chambre;
    }


    public function addReservationHotel(Reservation $reservationHotel)
    {
        $this->reservationsHotel[] = $reservationHotel;
    }


    public function getNbChambres()
    {
        return count($this->chambres);
    }


    public function getNbChambresReserv()
    {
        return count($this->reservationsHotel);
    }


    public function getNbChambresDispo()
    {
        return $this->getNbChambres() - $this->getNbChambresReserv();
    }


    public function affInfosHotel()
    {
        echo "<br><strong style='font-size: 20px;'>".$this."</strong><br>
        ".$this->adresse." ".$this->codePostale." ".$this->ville."<br>
        Nombre de chambres : ".$this->getNbChambres()."<br>
        Nombre de chambres réservées : ".$this->getNbChambresReserv()."<br>
        Nombre de chambres dispo : ".$this->getNbChambresDispo()."<br>";
    }
    

    public function affInfoResaHot()
    {
        if(count($this->reservationsHotel) >= 1)
        {
            echo "<br><strong style='font-size: 20px;'>Réservation de l'hôtel ".$this."</strong><br>
            <p>".count($this->reservationsHotel)." réservations</p>";
            foreach($this->reservationsHotel as $resa){
                echo 
                $resa->getClient() ."-". $resa->getChambre() ."-". $resa ."<br>";
        }
        }else{
            echo "<br><strong style='font-size: 20px;'>Réservation de l'hôtel ".$this."</strong><br>aucune réservation !";
        }
    }


    function statutsChambres()
{
    
        $result = "<table>
                    <thead>
                        <tr>
                            <th>CHAMBRE</th>
                            <th>PRIX</th>
                            <th>WIFI</th>
                            <th>ETAT</th>
                        </tr>
                    </thead>
                <tbody>";
        foreach ($this->chambres as $resa ) {
            $result .= "<tr>
                            <td>Chambre ".$resa->getNumChambre()."</td>
                            <td>" . $resa->getPrix() . "</td>
                            <td>" . $resa->getWifi() . "</td>
                            <td>" . $resa->afficherEtat() . "</td>
                        </tr>";
        }

        $result .= "</tbody></table>";
        echo $result;
}

}