<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรวิชญ์ 610-11</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                $a = "3";
                $b = "4";
                $c = $a + $b;

                $A = "20.5";
                $B = "20.5";
                $C = $A == $B;

                echo "<h1>";
                echo "ผลลัพธ์"."</br>";
                echo "</h1>";
                echo "ค่าของ \$a = 3"."</br>"."ค่าของ \$b = 4"."</br>";
                echo "ผลรวมของ \$a + \$b "." คือ ".$c."</br>";

                echo "</br>";

                echo "<h1>";
                echo "ผลลัพธ์"."</br>";
                echo "</h1>";
                echo "\$A = B"."</br>";
                echo "\$A = 20.5"."</br>";
                echo "\$B = 20.5"."</br>";
                echo "ผลลัพธ์คือ = ".$C;
            ?>  
        </div>
    </div>
</body>
</html>
