<?php

class Hotel {
    private string $nom;
    private int $nbEtoiles;
    private string $adresse;
    private string $codePostale;
    private string $ville ;
    private array $chambres;

    public function __construct(string $nom,int $nbEtoiles, string $adresse, string $codePostale, string $ville) 
    {
        $this->nom = $nom;
        $this->nbEtoiles = $nbEtoiles;
        $this->adresse = $adresse;
        $this->codePostale = $codePostale;
        $this->ville = $ville;
        $this->chambres = [] ;      
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


    public function getNbChambres()
    {
        return count($this->chambres);
    }


    public function getNbChambresReserv()
    {
        // 

        // Utilisation de array_filter pour filtrer les éléments faux
        $elementsFaux = array_filter($this->chambres, function($element) {
            return !$element; // Retourne true si l'élément est faux
        });

        // Utilisation de count pour obtenir le nombre d'éléments faux
        $nombreElementsFaux = count($elementsFaux);

        // Affichage du résultat
        return "Nombre de chambres réservèes : $nombreElementsFaux";
        // echo count($this->chambres);
    }


    public function getNbChambresDispo()
    {
                // Utilisation de array_filter pour filtrer les éléments vrais
        $elementsVrais = array_filter($this->chambres, function($element) {
            return (bool)$element; // Retourne true si l'élément est vrai
        });

        // Utilisation de count pour obtenir le nombre d'éléments vrais
        $nombreElementsVrais = count($elementsVrais);

        // Affichage du résultat
        return "Nombre de chambre de dispo : $nombreElementsVrais";
    }


    public function affInfosHotel()
    {
        echo "<strong style='font-size: 20px;'>".$this."</strong><br>
        ".$this->adresse." ".$this->codePostale." ".$this->ville."<br>
        Nombre de chambres : ".$this->getNbChambres()."<br>
        ".$this->getNbChambresReserv()."<br>
        ".$this->getNbChambresDispo()."<br>";
    }

      
}