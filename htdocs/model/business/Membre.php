<?php

namespace model\business;

class Membre implements \JsonSerializable
{
    public $_identifiant;
    public $_Nom;
    public $_pseudo ;
    public $_Email;
    public $_DateDerniereConnexion;
    public $_DateEntreDansClub;
    public $_DescriptionRole;
    public $_present;

    public function __construct($t)
    {
        $this->hydrate($t);
    }
    private function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

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

    public function getPseudo()
    {
        return $this->_pseudo;
    }
    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }

    public function getEmail()
    {
        return $this->_Email;
    }
    public function setEmail($Email)
    {
        $this->_Email = $Email;
    }

    public function getDateDerniereConnexion()
    {
        return $this->_DateDerniereConnexion;
    }
    public function setDateDerniereConnexion($DateDerniereConnexion)
    {
        $this->_DateDerniereConnexion = $DateDerniereConnexion;
    }

    public function getDateEntreDansClub()
    {
        return $this->_DateEntreDansClub;
    }
    public function setDateEntreDansClub($DateEntreDansClub)
    {
        $this->_DateEntreDansClub = $DateEntreDansClub;
    }

    public function getDescriptionRole()
    {
        return $this->_DescriptionRole;
    }
    public function setDescriptionRole($DescriptionRole)
    {
        $this->_DescriptionRole = $DescriptionRole;
    }

    public function getPresent()
    {
        return $this->_present;
    }
    public function setPresent($present)
    {
        $this->_present = $present;
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        $array = [
            'identifiant'=> $this->_identifiant,
            'Nom'=>$this->_Nom,
            'pseudo'=>$this->_pseudo,
            'Email'=>$this->_Email,
            'DateDerniereConnexion'=>$this->_DateDerniereConnexion,
            'DateEntreDansClub'=>$this->_DateEntreDansClub,
            'DescriptionRole'=>$this->_DescriptionRole,
            'present'=>$this->_present
        ];
        return json_encode($array, JSON_PRETTY_PRINT);
    }

}
