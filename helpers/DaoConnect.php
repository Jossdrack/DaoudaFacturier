<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoConnect
 *
 * @author bbpomme
 */
class DaoConnect {
    //put your code here
    protected $bd;
     
     public function getBd() {
        return $this->bd;
    }
    
     public function bdConnect() {

        try {
                $this->bd = new PDO("mysql:host=localhost;dbname=abcConsulting","root","root");
                //$this->bd = new PDO("mysql:host=estcequesojoss78.mysql.db;dbname=estcequesojoss78","estcequesojoss78","Lily235104");
                $this->bd->exec("SET NAME 'UTF8'");
            } catch (PDOException $e) {
                die("Erreur : " .$e->getMessage()) ;
            }
 
    }
     
}

?>
