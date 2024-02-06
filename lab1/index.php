<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo">
                <img src="logo.png" alt="Картинка" width="300px" height="100px">
            </a>
            <h1 class="header__title">Hello, World!</h1>
        </header>
        <main class="main">
            <h2 class="main__title">
                <?php
                    echo "Hello, World!"
                ?>
            </h2>
        </main>
        <footer class="footer">
            <h2 class="footer__title">footer</h2>
            <?php
                $a = 27;
                $b = 12;

                $c = round(sqrt(pow($a, 2) + pow($b, 2)), 2);

                echo "Гипотенуза равна $c <br>";


                $a = true;
                $b = false;

                echo "Значение a = " . var_export($a, true) .  " значение b = " . var_export($b, true) . "<br>";



                $quieter = 'Тише'; 

                $go = 'едешь'; 

                $further = 'дальше';



                echo $quieter . " " . $go . " " . $further . " " . "будешь.<br>";




                $a = 5.7;

                $b = 8.3; 

                $c = '5.6'; 

                $d = '9.2кг';



                echo "Пол а = " . floor($a) . "<br>";
                echo "Пол b = " . floor($b) . "<br>";
                echo "Пол c = " . floor((float) ($c)) . "<br>";
                echo "Пол d = " . floor((float) ($d)) . "<br>";


                echo "Потолок а = " . ceil($a) . "<br>";
                echo "Потолок b = " . ceil($b) . "<br>";
                echo "Потолок c = " . ceil((float) ($c)) . "<br>";
                echo "Потолок d = " . ceil((float) ($d)) . "<br>";


                echo "Округление а = " . round($a) . "<br>";
                echo "Округление b = " . round($b) . "<br>";
                echo "Округление c = " . round((float) ($c)) . "<br>";
                echo "Округление d = " . round((float) ($d)) . "<br>";


                $a = 7;

                $b = 4;

                $c = ' воробья';

                echo ($a - $b) . $c . "<br>";




                $a = 2;

                $b = '2'; 

                $d = '2a';



                echo var_export($a == $b, true) . "<br>";

                echo var_export($a != $b, true) . "<br>";

                echo var_export($a > $c, true) . "<br>";



                $a = 2; 

                $b = 2.0;

                $c = "2";

                $d = "two";

                $g = true;

                $f = false;


                echo  $a . " - " . gettype($a) . "<br>";
                $a = (int) $a;
                echo  $a . " - " . gettype($a) . "<br>";

                echo "<br>";
        
                echo  $b . " - " . gettype($b) . "<br>";
                $b = (int) $b;
                echo  $b . " - " . gettype($b) . "<br>";

                echo "<br>";
        
                echo  $c . " - " . gettype($c) . "<br>";
                $c = (int) $c;
                echo  $c . " - " . gettype($c) . "<br>";

                echo "<br>";
        
                echo  $d . " - " . gettype($d) . "<br>";
                $d = (int) $d;
                echo  $d . " - " . gettype($d) . "<br>";

                echo "<br>";
        
                echo  $g . " - " . gettype($a) . "<br>";
                $g = (int) $g;
                echo  $g . " - " . gettype($g) . "<br>";

                echo "<br>";
        
                echo  $f . " - " . gettype($f) . "<br>";
                $f = (int) $f;
                echo  $f . " - " . gettype($f) . "<br>";

                $result = $a % $b > 0 ? gettype($a / $b) . ($a % $b) : "$a / $b = " . ($a / $b);
                echo $result;
                
                echo "<br>";

                $a = 27; 
                $b = 12;
                
                if ($a) {
                    echo $b / $a;
                   
                    } else {
                   
                    echo $a = var_export((boolean) $a, true);
                   
                }

                echo "<br>";

                $year = 2022; 

                $month = 3; 

                $day = 2;

                echo sprintf("%04d-%02d-%02d", $year, $month, $day);

                echo "<br>";

                $sum = 0;

                for ($i = 1; $i <= 5; $i++) {

                    $sum += $i;
                }

                echo $sum;
            ?>
        </footer>
    </div>
</body>

</html>