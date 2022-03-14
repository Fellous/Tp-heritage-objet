<?php

 class Batiment implements batistructure

{
    private String $nom;
    private int $superficie ;
    private String $type;
    private int $nbEtages;

    public function Batiment($nom,$superficie,$type,$nbEtages)
    {
        $this->$nom = $nom;
        $this->$superficie = $superficie;
        $this->$type = $type;
        $this->$nbEtages = $nbEtages;
        
    }


    public function getNom() 
    {
		return $this->nom;
	}
    public function getSuperfie() 
    {
		return $this->superficie;
	}
    public function getType() 
    {
		return $this->superficie;
	}
    public function getNbEtages() 
    {
		return $this->superficie;
	}
    

	

}







?>