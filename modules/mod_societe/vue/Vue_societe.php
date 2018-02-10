<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vue_societe
 *
 * @author Joss
 */
class Vue_societe {
    //put your code here
    
    public function formulaireContact(){
        ?>

            <h2>Contact</h2>
            
            <form action="index.php?module=societe&action=enregistrement_contact" method="post">
                
                <p>Nom : <input type="text" name="nom" class="inpt-contact"/></p>
                <p>Prénom : <input type="text" name="prenom" class="inpt-contact"/></p>
                <p>Email : <input type="email" name="email" class="inpt-contact"/></p>
                <p>Tel : <input type="tel" name="tel" class="inpt-contact"/></p>
                <p>Commentaire : <textarea name="commentaire" id="commentaire"></textarea></p>
                
                <input type="submit" value="Enregistrer"/>
                
            </form>

        <?php
    }
    
    public function formulaireSociete($donnees){
        
        ?>

            <h2>Société</h2>
            
            <form action="index.php?module=societe&action=enregistrement_societe" method="post">
                
                <p>Nom : <input type="text" name="nom" class="inpt-contact"/></p>
                <p>adresse : <input type="text" name="adresse" class="inpt-contact"/></p>
                <p>Code post : <input type="number" name="cp" class="inpt-contact"/></p>
                <p>Ville : <input type="tel" name="ville" class="inpt-contact"/></p>
                <p>Contact <select name="idContact">
                        <option value="">Contact</option>
                        <?php
                                foreach ($donnees as $v) {                               
                        ?>
                            
                        <option value="<?php echo $v->getIdContact(); ?>"> <?php echo $v->getNom(); ?> - <?php echo $v->getPrenom(); ?> </option>
                           <?php
                        }
                        ?>
                         </select>
                </p>
                <input type="submit" value="Enregistrer"/>
            </form>

        <?php
    }
}
