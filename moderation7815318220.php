<?php
    session_start();  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="moderation/main-moderation.css">
        
        
        
         <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>     
        <title>EllCupidon</title>
    </head>    
    <body>
        
        <div class="container">
        
        <?php
    		require_once "functions/functions.php";
		?>
        
         <?php 
            require_once "blocks/header-mebel.php";    
        ?>
        
        <?php 
            require_once "moderation/main-moderation.php";    
        ?>
        

        
   
        </div>      
        
                 
          
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">
		</script>    
       <script type="text/javascript" src="js/dropdown.js"></script>   
        <script type="text/javascript" src="js/adaptiv.js"></script>
        <script type="text/javascript" src="moderation/login.js"></script>
     </body>
</html>