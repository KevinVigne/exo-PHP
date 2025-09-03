<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Arithmétique</title>
</head>
<body>
    <h1>Exercice Arithmétique</h1>
    <h2>Exercice 1</h2>
    <?php
        $a = 10; $b = 150;
        $resultat = $b+$a;
        echo "<p>b + a =$resultat</p>";
        $resultat = $b-$a;
        echo "<p> b - a =$resultat</p>";
        $resultat = $b*$a;
        echo "<p> b * a =$resultat</p>";
        $resultat = $b/$a;
        echo "<p> b / a =$resultat</p>";
        $resultat = $b%$a;
        echo "<p> b % a =$resultat</p>";
    ?>
    <h2>Exercice 2</h2>
    <?php
        $c = 20;
        $d = 10;
        $c += $d;
        echo "<p> c += d : $resultat</p>";
        $c -= $d;
        echo "<p> c -= d : $resultat</p>";
        $c *= $d;
        echo "<p> c *= d : $resultat</p>";
        $c /= $d;
        echo "<p> c /= d : $resultat</p>";
    ?>
    <h2>Exercice 3</h2>
    <?php
        $counter = 10;
        echo "<p>Counter =$counter</p>";
        $counter++;
        echo "<p>Counter +1 =$counter</p>";
        $counter = 10;
        echo "<p>Reset Counter :$counter</p>";
        $counter--;
        echo "<p>Counter -1 =$counter</p>";
    ?>
    <h2>Exercice 4</h2>
    <?php
        $num = 10 ;
        echo "<p>Num =$num</p>";
        $num++;
        echo "<p>Num + 1 =$num</p>";
        $num = 10;
        echo "<p>Reset Num : $num</p>";
        $num--;
        echo "<p>Num -1 =$num</p>";
    ?>
    <h2>Exercice 5</h2>
    <?php
        $age = 24;
        echo "<p>Age =$age</p>";
        $age++;
        echo "<p>Age + 1 =$age</p>";
        $age--;
        echo "<p>Age - 1 =$age</p>";
    ?>
    <h2>Exercice 6</h2>
    <?php
        $quantity = 5;
        echo "<p>Quantity =$quantity</p>";
        $quantity += 3;
        echo "<p>Quantity + 3 =$quantity</p>";
        $quantity -= 2;
        echo "<p>Quantity - 2 =$quantity</p>";
    ?>
    <h2>Exercice 7</h2>
    <?php
        $score = 50;
        echo "<p>Score =$score</p>";
        $score += 10;
        echo "<p>Score + 10 =$score</p>";
        $score -= 5;
        echo "<p>Score - 5 =$score</p>";
    ?>
</body>
</html>