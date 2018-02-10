<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vue_facture
 *
 * @author Joss
     */
class Vue_facture {

    //put your code here

    public function facture($donnees) {
       
        ?>
        <form method="post" action="index.php?module=facture&action=enregistrer_facture">
            <section id="entete">
                <div>
                    <img src=""/>
                </div>

                <p>ABC - CONSULTING</p>
                <p>2 ALLEE DES NAIADES</p>
                <p>94350 VILLIERS SUR MARNE</p>

                <h2>FACTURE n° 1</h2>


            </section>
            <section id="entete_client">
                <p>
                    <select name="idSociete">
                        <?php
                        
                                foreach ($donnees as $v) {
                                    ?>
                        <option value="<?php echo $v->getIdSociete();?>"><?php echo $v->getNom();?></option>
                                    
                                    <?php
                                }
                        
                        ?>
                    </select>
                    
                </p>
                <p><input type="text" name="adresse" id="client_adresse" placeholder="2 allée des Naïdes"></p>
                <p><input type="text" name="cp" id="client_cp" placeholder="94350"></p>   
                <p><input type="text" name="ville" id="client_ville" placeholder="Villiers sur marne"></p>
            </section>

            <section id="corps_facture">
                <table id="facture">
                    <tr>
                        <th><input type="button" id="ajoutLigne" value="Ajouter une ligne"/></th> <th>Désignation</th><th>Quantité</th><th>Prix HT</th>
                    </tr>
                    <tr class="ligne">

                        <td colspan="2">
                            <textarea name="designation[]"class="designation">
                                
                            </textarea>
                        </td>
                        <td><input type="number" name="quantite[]" class="quantite" value="1"/></td>
                        <td><input type="text"  name="ht[]" class="ht" value="0"/></td>
                    </tr>




                </table>
                <p>Total <span id="total_ht">0</span>.00€</p>
                <input type="hidden" name="totalHT" value="55"/>
            </section>
            <input type="submit" value="Valider facture"/>
        </form>        
        <?php
    }

    public function devis($donnees) {
        ?>
        <form method="post" action="index.php?module=facture&action=enregistrer_devis">
            <section id="entete">
                <div>
                    <img src=""/>
                </div>

                <p>ABC - CONSULTING</p>
                <p>2 ALLEE DES NAIADES</p>
                <p>94350 VILLIERS SUR MARNE</p>

                <h2>FACTURE n° 1</h2>


            </section>
            <section id="entete_client">
                <p>
                    <select name="idSociete">
                        <?php
                        
                                foreach ($donnees as $v) {
                                    ?>
                        <option value="<?php echo $v->getIdSociete();?>"><?php echo $v->getNom();?></option>
                                    
                                    <?php
                                }
                        
                        ?>
                    </select>
                    
                </p>
                <p><input type="text" name="adresse" id="client_adresse" placeholder="2 allée des Naïdes"></p>
                <p><input type="text" name="cp" id="client_cp" placeholder="94350"></p>   
                <p><input type="text" name="ville" id="client_ville" placeholder="Villiers sur marne"></p>
            </section>

            <section id="corps_facture">
                <table id="facture">
                    <tr>
                        <th><input type="button" id="ajoutLigne" value="Ajouter une ligne"/></th> <th>Désignation</th><th>Quantité</th><th>Prix HT</th>
                    </tr>
                    <tr class="ligne">

                        <td colspan="2">
                            <textarea name="designation[]"class="designation">
                                
                            </textarea>
                        </td>
                        <td><input type="number" name="quantite[]" class="quantite" value="1"/></td>
                        <td><input type="text"  name="ht[]" class="ht" value="0"/></td>
                    </tr>




                </table>
                <p>Total <span id="total_ht">0</span>.00€</p>
                <input type="hidden" name="totalHT" value="55"/>
            </section>
            <input type="submit" value="Valider facture"/>
        </form>        
        <?php
    }

    public function devis_facture($donnees) {
        var_dump($_POST);
        ?>
        <section id="entete">
                <div>
                    <img src=""/>
                </div>

                <p>ABC CONSULTING IDF</p>
                <p>2 ALLEE DES NAIADES</p>
                <p>94350 VILLIERS SUR MARNE</p>

                <h2>FACTURE n° 1</h2>


            </section>
            <section id="entete_client">
                <p><input type="text" id="client_titre" placeholder="société"/></p>
                <p><input type="text" id="client_adresse" placeholder="2 allée des Naïdes"></p>
                <p><input type="text" id="client_cp" placeholder="94350"></p>   
                <p><input type="text" id="client_ville" placeholder="Villiers sur marne"></p>
            </section>

            <section id="corps_facture">
                <table id="facture">
                    <tr>
                        <th><input type="button" id="ajoutLigne" value="Ajouter une ligne"/></th> <th>Désignation</th><th>Quantité</th><th>Prix HT</th>
                    </tr>
                    <?php
                          $i=0;  
                        for($i;i<count($_POST["designation"]);$i++){
                            echo $_POST["designation"][$i]."<br/><hr/><br/>";
                            ?>
                             <tr class="ligne">

                                <td colspan="2">
                                    <p class="designation">
                                        <?php if(isset($_POST["designation"])) echo $_POST["designation"][$i];?>
                                    </p>
                                </td>
                                <td><?php if(isset($_POST["quantite"])) echo $_POST["quantite"][$i];?></td>
                                <td><?php if(isset($_POST["ht"])) echo $_POST["ht"][$i];?></td>
                             </tr>
                    
                    
                    
                            <?php
                        }
                    
                    
                    ?>
                   




                </table>
                <p>Total <span id="total_ht">0</span>.00€</p>
            </section>
    <?php
    }

}
