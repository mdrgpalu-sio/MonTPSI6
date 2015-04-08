<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['id']) ){
        $login='root';
        $mdp='zouzou93';
       
        
        $connexion = new PDO('mysql:host=localhost;dbname=repertoire'
                ,$login , $mdp);
        
        
        $resultat = $connexion->query("DELETE FROM Personne WHERE id_pers=".$_POST['id'].";") or die (' Error:');
        }
        else {
            echo "impossible d'accéder a votre requête veuiller recommencer.";
            header('Location:site.php');
        }
        
        
       
        ?>
    </body>
</html>
