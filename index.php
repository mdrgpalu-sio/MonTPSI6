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
        $login='root';
        $mdp='zouzou93';
        $connexion = new PDO('mysql:host=localhost;dbname=repertoire'
                ,$login , $mdp);
        $resultat = $connexion->query('Select * From Personne;');
            echo '<table border=1>';
        foreach($resultat as $ligne)
        {
            echo '<tr><td>'.$ligne['id_pers'].'</td><td>'.$ligne['nom']."</td><td> ".$ligne['num_tel'].'</td></tr>';
            
        }
            echo '</table>';
            
        ?>
        <p><a href="Ajouter.php">Ajouter une personne </a></p>
        <p><a href="Supprimer.php">Supprimer une personne</a></p>
        <p><a href="Modifier.php">Modifier un numero</a></p>
    </body>
</html>