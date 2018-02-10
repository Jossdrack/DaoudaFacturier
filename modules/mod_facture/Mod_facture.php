<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mod_facture
 *
 * @author Joss
 */
class Mod_facture extends Module{
    //put your code here
    function __construct() {
        require_once Parametre::$MVC_BASE.'/modules/mod_facture/controleur/Cont_facture.php';
        $this->control = new Cont_facture();
        
         if(isset($_GET["action"]) && !empty($_GET["action"])){
            $action = $_GET["action"];   
       }else{
           $action ="";
       }
       
       switch ($action) {

           case "formulaire":
              
               $this->control->aff_formulaireFacture();
              
               break;
           case "formulaireDevis":
                $this->control->aff_formulaireDevis();
               break;
           case "enregistrer_facture":
                $this->control->actionEnregistrerFacture();
               break;
           
           case "enregistrer_devis":
                $this->control->actionEnregistrerDevis();
               break;

           default:
                $this->control->aff_formulaireFacture();
               break;
       }
    }

}
