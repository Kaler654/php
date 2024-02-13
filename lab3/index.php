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
            <h1 class="header__title">Feedback Form</h1>
        </header>
        <main class="main">
            <h2 class="main__title">
                <?php
                    $response = get_headers("http://127.0.0.1/php/lab3/index.html");

                    foreach ($response as $elem){
                        echo $elem . "<br>";
                    }
                ?>
                <a href="index.html">Перейти на 1 страницу</a>
            </h2>
        </main>
        <footer class="footer">
            <h2 class="footer__title">footer</h2>
        </footer>
    </div>
</body>

</html>