<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mod_societe
 *
 * @author Joss
 */
class Mod_societe extends Module{
    //put your code here
    function __construct() {
        require_once Parametre::$MVC_BASE.'/modules/mod_societe/controleur/Cont_societe.php';
        $this->control = new Cont_societe();
        
         if(isset($_GET["action"]) && !empty($_GET["action"])){
            $action = $_GET["action"];   
       }else{
           $action ="";
       }
       
       switch ($action) {

           case "contact":
               
               $this->control->Aff_formulaireContact();
              
               break;
           case "societe":
                $this->control->Aff_formulaireSociete();
               break;
           
           case "enregistrement_contact":
                $this->control->actionInsertContact();
               break;
           
           case "enregistrement_societe":
                $this->control->actionInsertSociete();
               break;
           
           default:
                $this->control->Aff_formulaireSociete();
               break;
       }
    }
}
