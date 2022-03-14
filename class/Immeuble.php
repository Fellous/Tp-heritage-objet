<?php

class Immeuble extends Batiment
{
    private bool $ascensseur;
    private int $nbAppartement;
    private bool $garage;


    public function Immeuble($nom,$superficie,$type,$nbEtages,$ascensseur=false,$nbAppartement=0)
    {
        $this->$nom = $nom;
        $this->$superficie = $superficie;
        $this->$type = $type;
        $this->$nbEtages = $nbEtages;
        $this->$ascensseur = $ascensseur;
        $this->$nbAppartement = $nbAppartement;
        
    }

    public function getNbAppartement() 
    {
		return $this->nbAppartement;
	}
    public function getAscensseur() 
    {
		return $this->ascensseur;
	}
    public function getGarage() 
    {
		return $this->garage;
	}
    public function setGarage()
    {

    }
}


?>