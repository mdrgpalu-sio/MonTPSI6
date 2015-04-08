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
        if(isset($_POST['nom']) && isset($_POST['num_tel'])){
      
            
     
        $login='root';
        $mdp='zouzou93';
       
        
        $connexion = new PDO('mysql:host=localhost;dbname=repertoire'
                ,$login , $mdp);
        $requete="INSERT INTO Personne VALUES ("."'".$_POST['nom']."'".","."'".$_POST['num_tel']."'".");";
        echo $requete;
        $resultat = $connexion->query("INSERT INTO Personne VALUES (DEFAULT,"."'".$_POST['nom']."'".","."'".$_POST['num_tel']."'".");") or die ('  Error:$requete ');
        }
        else
        {
        echo "impossible d'accéder a votre requête veuiller recommencer.";    
        }
        header('Location:index.php');
       
      ?>
            
        
        
    </body>
</html>   