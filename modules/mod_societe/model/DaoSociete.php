<?php
require_once Parametre::$MVC_BASE."/helpers/DaoConnect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoSociete
 *
 * @author Joss
 */
class DaoSociete extends DaoConnect{
    //put your code here
    function __construct() {
        parent::bdConnect();
    }

    public function insertSociete(Societe $s) {
        $insert = $this->bd->prepare("INSERT INTO societe (nom,adresse,cp,ville,idContact) VALUES(?,?,?,?,?)");
        $insert->execute(array($s->getNom(),$s->getAdresse(),$s->getCp(),$s->getVille(),$s->getIdContact()));
    }
    
}
