<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of header
 *
 * @author bbpomme
 */
class header {
    //put your code here
    function __construct() {
        if(isset($_SESSION["user_connect"]) && $_SESSION["user_connect"]===true){
        ?>
            <section>
              <nav>
                <ul>
                    <li><a href="index.php?module=societe&action=contact">CONTACT</a></li>
                    <li><a href="index.php?module=societe&action=societe">SOCIETE</a></li>
                    <li><a href="index.php?module=facture&action=formulaireDevis">DEVIS</a></li>
                    <li><a href="index.php?module=facture&action=formulaire">FACTURES</a></li>
                </ul>

            </nav>
               
            </section>
        <?php
        } 
    }
}

?>
