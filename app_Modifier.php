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
        if(isset($_POST['nom']) && isset($_POST['new_num'])){
        $login='root';
        $mdp='zouzou93';
       
        
        $connexion = new PDO('mysql:host=localhost;dbname=repertoire',$login , $mdp);
        
        
        $resultat = $connexion->query("UPDATE Personne SET num_tel='".$_POST['new_num']."' WHERE nom='".$_POST['nom']."';") or die (' Error');
        
        }
        else {
            echo "impossible d'accéder a votre requête veuiller recommencer.";
        }
        header('Location:index.php');
        ?>
    </body>
</html>
