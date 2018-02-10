<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mod_home
 *
 * @author bbpomme
 */
class Mod_home extends Module{
    //put your code here
    function __construct() {
        require_once Parametre::$MVC_BASE.'/module/mod_home/controleur/Cont_home.php';
        
        $this->control = new Cont_home();
        
        if(isset($_GET["action"]) && !empty($_GET["action"])){
            $action = $_GET["action"];   
       }else{
           $action ="";
       }
       
       switch ($action) {
           case "home":
               
               $this->control->aff_form();
               break;
           
           case "connection":
               
               $this->control->action_connect();    
               break;
           
           
           case "deconnection":
               
               $this->control->action_deconnection();
               
               break;
           

           default:
               $this->control->aff_form();
               break;
       }
    }

}

?>
