<?php

use model\business;
require 'Autoloader.php';
Autoloader::register();

//require("model/business/Fromage.php");
//require("model/business/Membre.php");
//require("model/business/Pays.php");
//require("model/business/Avis.php");
/*
$t = array('identifiant'=>1,'Nom'=>'Camembert');
$camembert = new \model\business\Fromage($t);

$t = array('identifiant'=>2,'Nom'=>'roquefort');
$roquefort = new \model\business\Fromage($t);

echo $camembert -> _Nom;
echo $camembert -> _identifiant;

echo $roquefort -> _Nom;
echo $roquefort -> _identifiant;
*/
$tableau = [
    'identifiant'=> 1,
    'Nom'=>"hugo",
    'pseudo'=>"hugz",
    'Email'=>'hugo@gmail.com',
    'DateDerniereConnexion'=>'2000-02-02',
    'DateEntreDansClub'=>'1962-02-02',
    'DescriptionRole'=>"King",
    'present'=>0
            ];
$membre = new business\Membre($tableau) ;
echo $membre->jsonSerialize();

