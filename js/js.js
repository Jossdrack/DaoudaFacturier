$(document).ready(function(){
    console.log("document chargé");

    var total = 0;
       
    var cumul_ht = [];
     
    $("#ajoutLigne").click(function(){
        console.log("click effectué");     
        ajouter_ligne();    
        cumul_ht.push(parseFloat($("#corps_facture table .ligne td .ht")));
        total = cout_ht();
       
        $("#corps_facture p #total_ht").text(total);
    
    });
    
    
$("#corps_facture table .ligne td .ht").keyup(function(){
       
    $("#corps_facture table .ligne").each(function(){
        var text = $(this).find("td .ht").val();
        
        if(!/^[0-9. ]+$/i.test(text)){
        $(this).find("td .ht").css("border-color","red");
        }else{
             $(this).find("td .ht").css("border-color","black");
        }
        
    });
    
    
   
    
});

$("form").submit(function(event){
    var error =0;
    $("#corps_facture table .ligne").each(function(){
        if(!/^[0-9. ]+$/i.test($(this).find("td .ht").val())){
            error++;
        }
        
        if(error !==0){
//            event.preventDefault();
//            alert("corriger");
        }
        
        console.log(error);
    });
});
    
    
});

function cout_ht(){
    var retour = 0.00;
    var total;
    $("#corps_facture table .ligne").each(function(){        
        var i = $("#corps_facture table .ligne td .ht").index();       
        total = parseFloat($(this).find("td .ht").val() * $(this).find("td .quantite").val()); 
       
        
        retour = retour + total;
     });
   return retour;  
}

function ajouter_ligne(){
    var ligne = $("<tr class='ligne'><td colspan='2'><textarea name='designation[]' class='designation'></textarea></td><td><input type='number' name='quantite[]' class='quantite'/></td><td><input type='text' name='ht[]' class='ht'/></td></tr>");
   $("#facture").append(ligne);
}

