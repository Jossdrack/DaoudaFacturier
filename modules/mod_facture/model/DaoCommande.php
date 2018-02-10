<?php
require_once Parametre::$MVC_BASE."/helpers/DaoConnect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoCommande
 *
 * @author Joss
 */
class DaoCommande extends DaoConnect{
    //put your code here
    function __construct() {
        parent::bdConnect();
    }
    
    public function insertCommande(Commande $c){
      
        $insert = $this->bd->prepare("INSERT INTO commande (genre,dateFacture,designation,prixHt,total,idSociete) VALUES(?,NOW(),?,?,?,?)");
        $insert->execute(array($c->getGenre(),$c->getDesignation(),$c->getPrixHt(),$c->getTotal(),$c->getIdSociete()));
    }

}
