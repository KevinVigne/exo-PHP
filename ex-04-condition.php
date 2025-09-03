<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Conditions</title>
</head>
<body>
    <h1>Exercices Conditions</h1>
    <h2>Exercice 1</h2>
    <?php
        $age = 24;
        if((is_int($age))&&($age <= 120) && ($age >= 0)){
            echo "<p>L'âge de $age est valide.</p>";
        }else{
            echo "<p>Age invalide</p>";
        }
    ?>
    <h2>Exercice 2</h2>
    <?php
        $jour = 'mercredi';
        //strtolower($jour) pour mettre en minuscule toutes les lettres. (en cas de prompt)
        switch($jour){
            case 'lundi';
                echo "<p>On est Lundi</p>";
            break;
            case 'mardi';
                echo "<p>On est Mardi</p>";
            break;
            case 'mercredi';
                echo "<p>On est Mercredi</p>";
            break;
            case 'jeudi';
                echo "<p>On est Jeudi</p>";
            break;
            case 'vendredi';
                echo "<p>On est Vendredi</p>";
            break;
            case 'samedi';
                echo "<p>On est Samedi</p>";
            break;
            case 'dimanche';
                echo "<p>On est Dimanche</p>";
            break;
            default;
                echo "<p>Jour invalide</p>";
            break;
        }
    ?>
    <h2>Exercice 3</h2>
    <?php
        $str1 = "10";
        $str2 = "10";
        if($str1 === $str2){
            echo "<p>les chaines de caractères $str1 et $str2 sont identiques</p>";
        }else{
            echo "<p>Les chaînes de caractères $str1 et $str2 ne sont pas identiques</p>";
        }
    ?>
    <h2>Exercice 4</h2>
    <?php
        $var ='';
        if(isset($var)){
            echo "<p>Variable $var définie</p>";
        }else{
            echo "<p>Variable $var non définie</p>";
        }
    ?>
    <h2>Exercice 5</h2>
    <?php
        $nom = "";
        if(empty($nom)){
            echo "<p>Veuillez remplir le champ</p>";
        }
    ?>
    <h2>Exercice 6</h2>
    <?php
        $empreinte = true;
        $mdp = false;
        if (($empreinte == TRUE) XOR ($mdp == TRUE)){
            echo "<p>Vous pouvez vous connecter</p>";
        }else{
            echo "<p>Connection Impossible</p>";
        }
    ?>
</body>
</html>