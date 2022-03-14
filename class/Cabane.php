<?php

class Cabane extends Batiment
{

    public function Cabane($nom,$superficie,$type,$nbEtages)
    {
        $this->$nom = $nom;
        $this->$superficie = $superficie;
        $this->$type = $type;
        $this->$nbEtages = $nbEtages;
        
    }
}



?>