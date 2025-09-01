<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 00 Bases</title>
    </head>
    <body>
        <!-- exo 1 -->
        <?php
            echo '<p> Hello World, Bienvenue sur mon premier script PHP </p>';
        ?>
        <!-- exo 2 -->
        <?php
            echo '<p>Bonjour tout le monde !</p>'.'<br>';
            $day = '01';
            $month = '/09';
            $year = '/2025';
            print'Aujourd\'hui, nous sommes le ';
            print $day;
            print $month;
            print $year;
            print '<br>';
            ?>
            <!-- exo 3 -->
            <p>Bonjour j'aime vraiment beaucoup les licornes</p>
            <?php
            echo '<p>Ce texte est affiché depuis PHP</p>';
        ?>

        <!-- exo 4 -->
        <?php
            // cet exercice utilise echo pour afficher un texte et print pour en afficher un autre
            /*
            La différence entre echo et print est minime,
            
            echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
            quelques mots" et ne retourne rien)
            
            print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
            true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
            valeur de vraioufaux sera true (1));
            */ 
        ?>
        <!-- exo 5 -->
        <?php
            $nom = 'Jimmy';
            $age = 12;
            $personne = [$nom,$age];
            print_r($personne);
        ?>

        <!-- exo 6 -->
        <?php
            $nombre = 156945;
            $str = 'Oui';
            var_dump($nombre);
            var_dump($str);
        ?>

        <!-- exo 7 -->
         <?php
            echo'<p>Bonjour à tous, voici un mot en <b>gras</b> , un autre en <i>italique</i> et un dernier en <u>souligné</u> </p>'
         ?>
         <!-- exo 8 -->
        <?php
            echo'<div><!--Création de liste--><ul><li>1</li><li>2</li><li>3</li><li>Soleil</li><li>!</li></ul></div>';
        ?>
        <!-- exo 9 -->
        <h1>ceci est un H1</h1>
        <h2>ceci est un H2</h2>
        <p>ceci est un paragraphe 
        <?php
            //setlocale(LC_TIME, "fr_FR");
            echo date('l jS F Y h:i:s A');
        ?></p>
        <!-- exo 10 -->
         <?php
            $message ='In principis poenales principis castra sunt plures enim ex carnifex.';
            echo "<h2>$message</h2>";
         ?>
        
    </body>
</html>