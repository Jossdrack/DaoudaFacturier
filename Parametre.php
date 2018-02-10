<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Parametre
 *
 * @author bbpomme
 */
class Parametre {
    //put your code here
    
    public static $MVC_BASE ="";
    
    public static function init(){
        self::$MVC_BASE = dirname(__FILE__);
        //self::$MVC_BASE = 'http://'.$_SERVER['HTTP_HOST'];
        //self::$MVC_BASE = "xnitinrajhjossc4.mysql.db";
        //self::$MVC_BASE = 'http://'.$_SERVER['PATH_INFO'];
        //self::$MVC_BASE = 'http://'.$_SERVER['PHP_SELF'];
    }
}

?>
