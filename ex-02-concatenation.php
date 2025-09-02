<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Concaténation</title>
</head>
<body>
    <h1>Exercices Concaténation</h1>
    <h2>Exercice 1</h2>
    <?php
        $nom = "Senju";
        $prenom = "Sarutobi";
        echo "<p>le nom complet du personnage est  $nom  $prenom !</p>";
        echo '<p>le nom complet du personnage est '. $nom . $prenom .' !</p>';
    ?>
    <h2>Exercice 2</h2>
    <?php
        $phrase1 = 'le ciel est';
        $phrase2 = "bleu aujourd'hui";
        echo "<p>$phrase1 $phrase2</p>";
    ?>
    <h2>Exercice 3</h2>
    <?php
        $mot1 ="j'aime"; $mot2 = 'le'; $mot3 ='PHP';
        echo '<p>' , $mot1 , ' ' , $mot2 , ' ' , $mot3 ,'</p>';
        echo "<p> $mot1 $mot2 $mot3</p>"
    ?>
    <h2>Exercice 4</h2>
    <?php
        $texte = 'je vais';
        $texte .= ' à la plage';
        echo "<p>$texte</p>";
    ?>
    <h2>Exercice 5</h2>
    <?php
        $citation = '\'Il a dit : "Le PHP est fantastique"\' ';
        echo "<p>$citation</p>";
    ?>
    <h2>Exercice 6</h2>
    <?php
        $mot ='PHP';
        echo '<p>Le ' . $mot .  ' c\'est trop bien !</p>';
    ?>
    <h2>Exercice 7</h2>
    <?php
        $nom = 'JimmyBillBob';
        echo '<p>Bonjour, ' . $nom . ', bienvenue sur notre site !</p>';
    ?>
    <h2>Exercice 8</h2>
    <?php
        $citation ='la vie est belle';
        $citation .= ',surtout quand on code en PHP!';
        echo "<p>$citation</p>";
    ?>
    <h2>Exercice 9</h2>
    <?php
        $a = 5;
        $b = 10;
        $resultat = $a + $b;
        echo '<p>La somme de ' . $a . ' et ' . $b .  ' est '. $resultat . '</p>';
    ?>
</body>
</html>