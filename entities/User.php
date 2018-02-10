<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Joss
 */
class User {
    //put your code here
    private static $email = "joss.drack@gmail.com";
            
    private static $mdp = "azerty";
    
    function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = "set".$key;
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public function getEmail(){
        return User::$email;
    }
    
    public function getMdp() {
        return User::$mdp;
    }
    
    
}
