<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Feedback Form</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo">
                <img src="logo.png" alt="Картинка" width="300px" height="100px">
            </a>
            <h1 class="header__title">HomeWork символическая ссылка</h1>
        </header>
        <main class="main">
            <h2 class="main__title">
                <?php

                function trig($trigFunc, $expression)
                {
                    $f = $trigFunc;
                    $expression = str_replace($trigFunc, "\$f", $expression);
                    echo $expression . "<br>";
                    $result = eval('return ' . $expression . ";");
                    return $result;
                }


                $expression = file_get_contents("expression.txt");
                // $f = "cos";
                // $expression = str_replace("cos", "\$f", $expression);`
                // echo $expression . "<br>";
                // $result = eval('return ' . $expression . ";");
                // echo $result;
                
                echo trig("cos", $expression);

                ?>
            </h2>
        </main>
        <footer class="footer">
            <h2 class="footer__title">footer</h2>
        </footer>
    </div>
</body>

</html>