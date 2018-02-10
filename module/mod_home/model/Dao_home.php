<?php
require_once Parametre::$MVC_BASE.'/helpers/DaoConnect.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dao_home
 *
 * @author bbpomme
 */
class Dao_home extends DaoConnect{
    //put your code here
    function __construct() {
        parent::bdConnect();  
    }
    
    public function select_home() {
        $select = $this->bd->query("SELECT * FROM admin");
        
        while (($donnees = $select->fetch(PDO::FETCH_ASSOC)) !== FALSE){
            $home[] = new User($donnees);
        }

        return $home;
        
    }
    
   
    public function selectAdmin(User $u){
        $select = $this->bd->prepare("SELECT email, mdp FROM admin WHERE email = ? and mdp=?");
        $select->execute(array($u->getEmail(),$u->getMdp()));
        
        $user = new User($donnees = $select->fetch(PDO::FETCH_ASSOC));
        
        if(is_object($user)){
            return true;
        }else{
            return false;
        }
    }

}
class Dao_home_Exeption extends Exception {

}

?>
