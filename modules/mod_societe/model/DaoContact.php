<?php
require_once Parametre::$MVC_BASE."/helpers/DaoConnect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoContact
 *
 * @author Joss
 */
class DaoContact extends DaoConnect{
    //put your code here
    function __construct() {
        parent::bdConnect();
    }
    
    public function insertContact(Contact $c){
        $insert = $this->bd->prepare("INSERT INTO contact (nom,prenom,email,tel,commentaire) VALUES(?,?,?,?,?)");
        $insert->execute(array($c->getNom(),$c->getPrenom(),$c->getEmail(),$c->getTel(),$c->getCommentaire()));
    }
    
    public function selectAllContact(){
        $select = $this->bd->query("SELECT * FROM contact");
        
        while ($donnees = $select->fetch(PDO::FETCH_ASSOC)){
            $contact[] = new Contact($donnees);
        }
        //var_dump($contact);
        return $contact;
    }

}
