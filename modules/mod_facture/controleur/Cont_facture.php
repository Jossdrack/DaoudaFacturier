<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cont_facture
 *
 * @author Joss
 */
class Cont_facture extends Controleur{
    //put your code here
    function __construct() {
        require_once Parametre::$MVC_BASE.'/modules/mod_facture/vue/Vue_facture.php';
        require_once Parametre::$MVC_BASE.'/modules/mod_facture/model/DaoCommande.php';
        require_once Parametre::$MVC_BASE.'/modules/mod_facture/model/DaoSociete.php';
        require_once Parametre::$MVC_BASE.'/entities/Commande.php';
        require_once Parametre::$MVC_BASE.'/entities/Societe.php';
        
    }
    
    
    public function aff_formulaireFacture() {
        
        $this->titre="Facture";
        $this->vue= new Vue_facture();
        $this->method_vue="facture";
        
        $DaoSociete = new DaoSociete();
        $donnees = $DaoSociete->selectSociete();
        
        $this->parametre = $donnees;
        
        
        
        
        
    }
    
    public function actionEnregistrerFacture(){
      
      if(isset($_POST["designation"]) && isset($_POST["quantite"]) && isset($_POST["ht"]) && isset($_POST["totalHT"])){  
          if(isset($_POST["idSociete"])){
                $designation="";
                $quantite="";
                $ht="";
                $ligne = count($_POST["designation"]);
                $i =0;
                for($i;$i<$ligne;$i++){
                    $designation .=trim($_POST["designation"][$i])." - ".trim($_POST["quantite"][$i])." - ".trim($_POST["ht"][$i]).";";
                    $ht .= trim($_POST["ht"][$i])." ; ";
                }
                
                $commande = new Commande(array("genre"=>"Facture","designation"=> trim(htmlentities($designation)),
                    "prixHt"=> trim(htmlentities($ht)),
                    "total"=> trim(htmlentities($_POST["totalHT"])),
                    "idSociete"=> trim(htmlentities($_POST["idSociete"]))            
                ));
               
                $daoCommande = new DaoCommande();
                
                $daoCommande->insertCommande($commande);
                
                
          }       
            
      }
        $this->aff_formulaireFacture();
    }


    public function aff_formulaireDevis() {
        $this->titre="Devis";
        $this->vue= new Vue_facture();
        $this->method_vue="devis";
        
        $DaoSociete = new DaoSociete();
        $donnees = $DaoSociete->selectSociete();
        
        $this->parametre = $donnees;
    }
    
    public function actionEnregistrerDevis(){
      
      if(isset($_POST["designation"]) && isset($_POST["quantite"]) && isset($_POST["ht"]) && isset($_POST["totalHT"])){  
          if(isset($_POST["societe"])){
                $designation="";
                $quantite="";
                $ht="";
                $ligne = count($_POST["designation"]);
                $i =0;
                for($i;$i<$ligne;$i++){
                    $designation .=trim($_POST["designation"][$i])." - ".trim($_POST["quantite"][$i])." - ".trim($_POST["ht"][$i]).";";
                    $ht .= trim($_POST["ht"][$i])." ; ";
                }
                
                $commande = new Commande(array("genre"=>"Devis","designation"=> trim(htmlentities($designation)),
                    "prixHt"=> trim(htmlentities($ht)),
                    "total"=> trim(htmlentities($_POST["totalHT"])),
                    "idSociete"=> trim(htmlentities($_POST["idSociete"]))            
                ));
               
                $daoCommande = new DaoCommande();
                
                $daoCommande->insertCommande($commande);
                
                
          }       
            
      }
        $this->aff_formulaireDevis();
    }
    
    public function valider_form(){
        $this->titre ="Facture/Devis";
        $this->vue = new Vue_facture();
        $this->method_vue ="devis_facture";
    }

}
