<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commande
 *
 * @author Joss
 */
class Commande {
    //put your code here
    private $idCommande;
    private $genre;
    private $dateFacture;
    private $designation;
    private $prixHt;
    private $total;
    private $idSociete;
            
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

    
    
    function getIdCommande() {
        return $this->idCommande;
    }

    function getGenre() {
        return $this->genre;
    }

    function getDateFacture() {
        return $this->dateFacture;
    }

    function getDesignation() {
        return $this->designation;
    }

    function getPrixHt() {
        return $this->prixHt;
    }

    function getTotal() {
        return $this->total;
    }

    function getIdSociete(){
        return $this->idSociete;
    }

    function setIdCommande($idCommande) {
        $this->idCommande = $idCommande;
    }

    function setGenre($genre) {
        $this->genre = $genre;
    }

    function setDateFacture($dateFacture) {
        $this->dateFacture = $dateFacture;
    }

    function setDesignation($designation) {
        $this->designation = $designation;
    }

    function setPrixHt($prixHt) {
        $this->prixHt = $prixHt;
    }

    function setTotal($total) {
        $this->total = $total;
    }
    
    function setIdSociete($idSociete){
        $this->idSociete = $idSociete;
    }


}
