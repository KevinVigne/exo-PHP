<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Tableau</title>
</head>
<body>
    <h1>Exercice Tableau</h1>
    <h2>Exercice 1</h2>
    <?php
        $film = ['Pirate des Caraïbes','Narnia','Interstellar'];
        var_dump($film);
    ?>
    <h2>Exercice 2</h2>
    <?php
        $user = array(
            'prenom' => 'Jimmy',
            'nom'    => 'Neutron',
            'age' => '10'
        );
        echo "<p>Le prenom de l'utilisateur est $user[prenom], son nom est $user[nom] et il a $user[age] ans.</p>";
    ?>
    <h2>Exercice 3</h2>
        <?php
            $villes =['Paris','Lyon','Marseille'];
            echo "<p>Il y a " . count($villes) . " villes dans le tableau</p>";
        ?>
    <h2>Exercice 4</h2>
        <?php
            $mois = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre'];
            for($i = 0; $i < sizeof($mois); $i++){
                echo "<p>$mois[$i]</p>";
            }
        ?>
    <h2>Exercice 5</h2>
    <?php
        $animaux = [
            "chien" => "aboiement",
            "chat" => "miaulement",
            "canard" => "cancane"
        ];
        foreach($animaux as $id => $bruit){
            echo "<p>l'animal $id fais $bruit</p>";
        };
    ?>

</body>
</html>