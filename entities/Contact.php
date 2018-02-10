<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author Joss
 */
class Contact {
    //put your code here
    private $idContact;
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $commentaire;
    
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
           
    
    function getIdContact() {
        return $this->idContact;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getEmail() {
        return $this->email;
    }

    function getTel() {
        return $this->tel;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function setIdContact($idContact) {
        $this->idContact = $idContact;
    }

    function setNom($nom) {
        $this->nom = strtoupper($nom);
    }

    function setPrenom($prenom) {
        $this->prenom = strtoupper($prenom);
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }


}
