<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Solve the equation</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <a class="header__logo">
                <img src="logo.png" alt="Картинка" width="300px" height="100px">
            </a>
            <h1 class="header__title">Solve the equation</h1>
        </header>
        <main class="main">
            <h2 class="main__title">
                <?php
                    $equation = explode(" ", "x + 67 = 129");
                    $operation = $equation[1];
                    $num = ctype_digit($equation[0]) ? (int)$equation[0] : (int)$equation[2];
                    $equals = (int)$equation[4];

                    $x = "";

                    if ($operation == "+") {
                        $x = $equals - $num;
                    } elseif ($operation == "-") {
                        $x = $equals + $num;
                    } elseif ($operation == "*") {
                        $x = $equals / $num;
                    } elseif ($operation == "/") {
                        $x = $equals * $num;
                    } elseif ($operation == "**") {
                        $x = log($equals, $num);
                    } else {
                        $x = "Error";
                    }
                    
                    echo "x = $x"
                ?>
            </h2>
        </main>
        <footer class="footer">
            <h2 class="footer__title">footer</h2>
        </footer>
    </div>
</body>

</html>