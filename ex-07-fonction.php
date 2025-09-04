<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Fonction</title>
</head>
<body>
    <h1>Exercices Fonction</h1>
    <h2>Exercice 1</h2>
    <?php
    function greet(){
        echo "<p>Hello World!</p>";
    }
    greet();
    ?>
    <h2>Exercice 2</h2>
    <?php
    $name = "Bernard";
    function greetUser($name){
        echo"<p>Hello $name !</p>";
    }
    greetUser($name);
    ?>
    <h2>Exercice 3</h2>
    <?php
        function sum($a,$b){
            $total = $a + $b;
            return $total;
        }
        echo "<p>" . sum(5,9) . "</p>";
    ?>
    <h2>Exercice 4</h2>
    <?php
        function greetWithTime($name,$timeOfDay){
            echo "<p>Good $timeOfDay , $name!</p>";
        }
        greetWithTime('Jean','evening');
    ?>
    <h2>Exercice 5</h2>
    <?php
        function checkEligibility($age,$hasLicense){
            if(($age >= 18) AND  ($hasLicense == TRUE)){
                return 'Eligible';
            }else{
                return 'Not Eligible';
            }
        }
        echo "<p>The Personn is " .  checkEligibility(19,TRUE) . "</p>";
    ?>
</body>
</html>