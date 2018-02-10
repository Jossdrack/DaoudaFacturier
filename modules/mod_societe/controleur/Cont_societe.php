<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cont_societe
 *
 * @author Joss
 */
class Cont_societe extends Controleur{
    //put your code here
    function __construct() {
        require_once Parametre::$MVC_BASE.'/modules/mod_societe/vue/Vue_societe.php';
        require_once Parametre::$MVC_BASE.'/modules/mod_societe/model/DaoContact.php';
        require_once Parametre::$MVC_BASE.'/modules/mod_societe/model/DaoSociete.php';
        require_once Parametre::$MVC_BASE.'/entities/Contact.php';
        require_once Parametre::$MVC_BASE.'/entities/Societe.php';
    }
    
    public function Aff_formulaireContact(){
        $this->titre="Société";
        $this->vue = new Vue_societe();
        $this->method_vue = "formulaireContact";
    }
    
    public function actionInsertContact(){
        if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["tel"]) && isset($_POST["commentaire"])){
            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
               $contact = new Contact(array("nom"=> trim(htmlentities($_POST["nom"])),"prenom"=> trim(htmlentities($_POST["prenom"])),
                                "email"=> trim(htmlentities($_POST["email"])),"tel"=> trim(htmlentities($_POST["tel"])),
                                "commentaire"=> trim(htmlentities($_POST["commentaire"]))
                       ));
               
               $daoContact = new DaoContact();
               $daoContact->insertContact($contact);
            }
        }
        $this->Aff_formulaireContact();
    }


    public function Aff_formulaireSociete(){
        $this->titre="Société";
        $this->vue = new Vue_societe();
        $this->method_vue = "formulaireSociete";
        
        $daoContact = new DaoContact();
        $donnees = $daoContact->selectAllContact();
        $this->parametre = $donnees;
    }
    
    public function actionInsertSociete(){
        if(isset($_POST["nom"]) && isset($_POST["adresse"]) && isset($_POST["cp"]) && isset($_POST["ville"]) && isset($_POST["idContact"])){
            if(is_numeric($_POST["cp"])){
                $societe = new Societe(array("nom"=>trim($_POST["nom"]),"adresse"=>trim($_POST["adresse"]),
                    "cp"=>trim($_POST["cp"]),"ville"=>trim($_POST["ville"]),"idContact"=>trim($_POST["idContact"])                   
                ));
                
                $daoSociete = new DaoSociete();
                $daoSociete->insertSociete($societe);
            }
        }
        $this->Aff_formulaireSociete();
    }

}
