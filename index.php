<?php 

//error_reporting( E_ALL );
//ini_set( 'display_errors', 'On' );
session_start();
//echo phpinfo(); 

var_dump($_SESSION);
    require_once 'helpers/Controleur.php';
    require_once 'helpers/Module.php';
    require_once 'functions/function.php';
    require_once 'Parametre.php';

    
    
    Parametre::init();
    
    if(isset($_GET["module"]) && !empty($_GET["module"])){
        $module = $_GET["module"];
    }  else {
        $module = "home"; 
    }
    
  
      switch ($module) {
          case "home":
           
             require_once Parametre::$MVC_BASE.'/module/mod_home/Mod_home.php';
                $moduleHome = new Mod_Home();   
               
              break;
          
          case "facture":

              require_once Parametre::$MVC_BASE.'/modules/mod_facture/Mod_facture.php';
              require_once Parametre::$MVC_BASE.'/module/mod_home/Mod_home.php';
              $moduleHome = new Mod_Home(); 
              $moduleFacture = new Mod_facture(); 
              
              break;
          
          case "societe":
              
              require_once Parametre::$MVC_BASE.'/module/mod_home/Mod_home.php';
              require_once Parametre::$MVC_BASE.'/modules/mod_societe/Mod_societe.php';
              $moduleHome = new Mod_Home(); 
              $moduleSociete = new Mod_societe();

              break;
          
          

          default:
              
              require_once Parametre::$MVC_BASE.'/module/mod_home/Mod_home.php';
              $moduleHome = new Mod_Home();  
              
              break;
      }
      
      
    ?>

    <!DOCTYPE html>
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <meta name="robots" content="index,follow"/>
                    <meta name="description" content="<?php //if(isset($module)) echo $module->getControl()->getDescription();?>"/>
                    <meta name="keywords" content="<?php //if(isset($module)) echo $module->getControl()->getkeywords();?>"/>
                   <link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico' rel='stylesheet' type='text/css'>
<!--                    <LINK rel="stylesheet" href="css/meyer.css" type="text/css" media="screen"/>-->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <script  src="js/js.js"></script>
                    <title>ABC CONSULTING - <?php //if(isset($module)) echo $module->getControl()->getTitre();?></title>
                    
                </head>
                <body>
                       
                    
  <?php 
	
      require_once 'header.php';
      $header = new header();
        //HOME
        if(isset($moduleHome))echo $moduleHome->display ();
        if(isset($moduleFacture))echo $moduleFacture->display();
        if(isset($moduleSociete)) echo $moduleSociete->display();
        cdcvf


?>

                 
                    