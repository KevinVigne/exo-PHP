<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Boucles</title>
</head>
<body>
    <h1>Exercices Boucle</h1>
    <h2>Exercice 1</h2>
    <?php
    $count = 0;
    while($count <= 20){
        if($count % 2 == 0){
            echo "<p>$count</p>";
            
        }
        $count++;
    }
    ?>
    <h2>Exercice 2</h2>
    <ul>
        <?php
            $count = 2000;
            while($count < 2025){
                echo"<li>$count</li>";
                $count++;
            }
        ?>
    </ul>
    <h2>Exercice 3</h2>
    <?php
        $number = 1;
        do{
            if($number % 3 == 0){
                echo "<p>$number</p>";
            }
            $number++;
        }while($number <= 30);
    ?>
    <h2>Exercice 4</h2>
    <?php
        $personnal_info = [
            'prenom' => 'JimmyBillBob',
            'nom' => ' Cena',
            'email' => 'jimmybillbob.cena@gmail.com',
            'age' => 15
        ];
        foreach($personnal_info as $info => $value){
            if(str_contains($personnal_info[$info],'@'))
                echo "<a href='mailto:$value'>$value<a>";
            else{
                echo "<p>$personnal_info[$info]</p>";
            }
        }
    ?>
    <h2>Exercice 5</h2>
    
    <?php
        echo "<table>";
        for ($i = 0;$i <10 ; $i++){
            echo"<tr>";
            for($j = 0; $j < 10 ; $j++){
                $number = rand(1,100);
                if($number % 2 == 0){
                    echo "<td style ='background-color: green;'> $number</td>";
                }else{
                    echo "<td>$number</td>";
                }
                
            }
            echo "</tr>";
        }
        echo"</table>";
    ?>
    
    <h2>Exercice 6</h2>
    <?php
        $tableau =[
            0 =>[
                'prenom' => 'Riri',
                'nom' => 'Duck'
            ]
        ];

    ?>
</body>
</html>