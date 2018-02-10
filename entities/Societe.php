<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Societe
 *
 * @author Joss
 */
class Societe {
    //put your code here
    private $idSociete;
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $idContact;
    
    
    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = "set".$key;
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    
    function getIdSociete() {
        return $this->idSociete;
    }

    function getNom() {
        return $this->nom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getCp() {
        return $this->cp;
    }

    function getVille() {
        return $this->ville;
    }

    function getIdContact() {
        return $this->idContact;
    }

    function setIdSociete($idSociete) {
        $this->idSociete = $idSociete;
    }

    function setNom($nom) {
        $this->nom = strtoupper($nom);
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setCp($cp) {
        $this->cp = $cp;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setIdContact($idContact) {
        $this->idContact = $idContact;
    }


}
