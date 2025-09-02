<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Constantes</title>
</head>
<body>
    <h1>Exercices Constantes</h1>
    <h2>Exercice 1</h2>
    <?php
        define('PI',3.14159);
        echo '<p>' . PI . '</p>' ;
    ?>
    <h2>Exercice 2</h2>
    <?php
        define('LARGEUR',10);
        define('LONGUEUR',20);
        $resultat = LARGEUR * LONGUEUR;
        echo "<p>$resultat</p>"
    ?>
    <h2>Exercice 3</h2>
    <?php
        echo '<p>' . __DIR__ . '</p>' ;
    ?>
    <h2>Exercice 4</h2>
    <?php
        define('PREFIXE','Bonjour');
        $mot1 ='tout';
        $mot2 = 'le';
        $mot3 = 'monde';
        echo '<p>' . PREFIXE . " $mot1  $mot2  $mot3 </p>";
    ?>
    <h2>Exercice 5</h2>
    <?php
        define('SUJET','la France');
        $capitale = 'Paris';
        echo "<p>La capitale de " . SUJET . " est  $capitale</p>";
    ?>
    <h2>Exercice 6</h2>
    <?php
        define('TAUX_TVA',0.2);
        $prix_ht = 100;
        $prix_ttc = $prix_ht + (TAUX_TVA * $prix_ht);
        echo $prix_ttc;
    ?>
    <h2>Exercice 7</h2>
    <?php
        define('EURO_VERS_USD',1.2);
        $euro = 15;
        $dollars = $euro * EURO_VERS_USD;
        echo "<p>$dollars</p>";
    ?>
    <h2>Exercice 8</h2>
    <?php
        define('SEUL',10);
        $random = rand(0,20);
        if(SEUL < $random){
            echo '<p>' . $random . ' est supérieur  à ' . SEUL . '</p>';
        }else{
            echo '<p>le nombre est inférieur à ' . SEUL .'</p>';
        }
    ?>
    <h2>Exercice 9</h2>
    <?php
        define('URL_SITE','https://www.youtube.com');
        $chemin = '/watch?v=jIQ6UV2onyI';
        $chemin_complet = URL_SITE . $chemin;
        echo "<a href = \"$chemin_complet\">Site</a>";
    ?>
    <h2>Exercice 10</h2>
    <?php
        define ('AGE_LEGAL',18);
        $age_user = rand(5,50);
        if($age_user < AGE_LEGAL){
            echo '<p>Vous n\'avez pas l\'âge légal de ' . AGE_LEGAL . ' ans</p>';
        }else{
            echo '<p>Bienvenue sur un site où avoir l\'âge légal est requis</p>';
        }
    ?>
</body>
</html>