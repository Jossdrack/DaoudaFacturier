<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vue_home
 *
 * @author bbpomme
 */
class Vue_home {
    //put your code here
    public function formConnection() {
        ?>
<section>
    <h2>Connection</h2>
            <form action="index.php?module=home&action=connection" method="post">
                <input type="email" name="email" placeholder="email@email.com"/><br/>
                <input type="text" name="mdp" placeholder="mot de passe"/><br/><br/>
                <input type="submit" name="envoyer"/>
            </form>

</section>        <?php
    }
    
        public function deconnection(){
        ?>
            
            <section>
               <form action="index.php?module=home&action=deconnection" method="post">
                   <input type="submit" name="deconnection"value="Se déconnecter"/><br/>
                   
                </form> 
            </section>
        <?php
    }
    
            
}


