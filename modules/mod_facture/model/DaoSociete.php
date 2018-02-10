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
    
    public function selectSociete(){
        $select = $this->bd->query("SELECT idSociete,nom FROM societe ORDER BY nom DESC");
        
        while ($donnees= $select->fetch(PDO::FETCH_ASSOC)){
            $s[]=new Societe($donnees);
        }
        return $s;
    }
}
