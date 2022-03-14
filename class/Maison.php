<?php

class Maison extends Batiment implements IbatiHome

{
    private bool $garage;
    private bool $cheminé;

    public function Maison($nom,$superficie,$type,$nbEtages,$garage=false,$cheminé=false)
    {
        $this->$nom = $nom;
        $this->$superficie = $superficie;
        $this->$type = $type;
        $this->$nbEtages = $nbEtages;
        $this->$garage = $garage;
        $this->$cheminé = $cheminé;

        
    }
    public function getGarage() 
    {
		return $this->garage;
	}
    public function getCheminé() 
    {
		return $this->cheminé;
	}
}

?>