<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h3>Exercice</h3>
    <?php 
        function GetMoyenne($tab){
            $n=count($tab);
            $somme=0;
            foreach($tab as $t){
                $somme+=$t;
            }
            return $somme/$n;
        }
        $tab1=[];
        for ($i=0; $i<10; $i++){
            $tab1[$i]=rand(1,20);
        }

        echo "<h3>les elements du tableau sont :</h3>";
        foreach($tab1 as $t){
            echo $t." ";
        }
        echo "<h3>la moyenne est : ".GetMoyenne($tab1)."</h3>";

        $paires=[];
        foreach($tab1 as $t){
            if($t % 2 == 0){
                $paires[]=$t;
            }
        }

        echo "<h3>les elements de tableaux paires </h3>"
        foreach($paires as $t){
            echo $t." ";
        }
    ?>
</body>
</html>