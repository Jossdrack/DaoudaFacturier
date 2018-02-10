<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cont_home
 *
 * @author bbpomme
 */
class Cont_home extends Controleur{
    //put your code here
    function __construct() {
        require_once Parametre::$MVC_BASE.'/module/mod_home/vue/Vue_home.php';
        require_once Parametre::$MVC_BASE.'/module/mod_home/model/Dao_home.php';
        require_once Parametre::$MVC_BASE.'/entities/User.php';
    }
    
    
    public function aff_form(){
        if(!isset($_SESSION["user_connect"]) || $_SESSION["user_connect"] !== true){
            $this->titre="Page de conection";
            $this->vue= new Vue_home();
            $this->method_vue ="formConnection";
        } else {
            $this->aff_deconnection();
        }
        
  
    }
    
     public function action_connect() {
        
      if((isset($_POST["email"])) && (isset($_POST["mdp"]))) {
                $mail = $_POST["email"];
                $mdp = $_POST["mdp"];
                
                $user = new User(array("email"=>$_POST["email"],"mdp"=>$_POST["mdp"]));
               $Dao_home = new Dao_home();
               $result = $Dao_home->selectAdmin($user);
                if($result){
                    $_SESSION["user_connect"] = true;
                    $this->aff_deconnection();                
                }
 
      }        
    }
    
    public function action_deconnection(){
        if(isset($_POST["deconnection"])){
            unset($_SESSION);
            session_destroy();
             ?>
                <script>
                    window.setTimeout(function(){
                        window.location="index.php";
                    },20000);
                </script>
            <?php
        }
        $this->aff_form();
    }
    
    public function aff_deconnection(){
            $this->vue = new Vue_home();
            $this->method_vue ="deconnection";
            
    }
    
}
?>
