<?php


namespace model\business;


abstract  class Aliment
{
    public $_identifiant;
    public $_Nom;
    public $_pays ;
    public $_DateCreation;
    public $_image;

    public function getIdentifiant()
    {
        return $this->_identifiant;
    }
    public function setIdentifiant($identifiant)
    {
        $this->_identifiant = $identifiant;
    }

    public function getNom()
    {
        return $this->_Nom;
    }
    public function setNom($Nom)
    {
        $this->_Nom = $Nom;
    }

    public function getPays()
    {
        return $this->_pays;
    }
    public function setPays($pays)
    {
        $this->_pays = $pays;
    }

    public function getDateCreation()
    {
        return $this->_DateCreation;
    }
    public function setDateCreation($DateCreation)
    {
        $this->_DateCreation = $DateCreation;
    }

    public function getImage()
    {
        return $this->_image;
    }
    public function setImage($image)
    {
        $this->_image = $image;
    }

    public function display()
    {
        echo $this->_identifiant;
        echo $this->_Nom;
        echo $this->_pays->getNom();
        echo $this->_DateCreation->format('d/m/Y');
        echo $this->_image;
    }
}