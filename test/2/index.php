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
            <h1 class="header__title">test</h1>
        </header>
        <main class="main">
            <h2 class="main__title">
                <?php
                    // $file = "test.txt";

                    // $text = '12345';

                    // $file = fopen("test.txt", 'w');
                    // fwrite($file, $text);
                    // fclose($file);



                    // $files = ["1.txt", "2.txt", "3.txt"];
                    // $result = "";

                    // foreach ($files as $file) {
                    // //    $fileText = fopen($file, 'r');
                    // $text = file_get_contents($file);
                    // $result .= $text ;
                    // }

                    // file_put_contents("new.txt", $result);


                    // $text = file_get_contents("test.txt");
                    // $result = (int)$text ** 2;

                    // file_put_contents("test.txt", $result)


                    // $text = file_get_contents("test.txt");

                    // file_put_contents("copy.txt", $text)



                    // $result = round(filesize("test.png") / (2 ** 20), 1);

                    // echo $result;




                    // $file = 'test.txt';
                    // $new_path = 'dir/test.txt';
                    
                    // rename($file, $new_path)

                    // var_dump(file_exists("test.txt"));

                    // $filename = 'test.txt';
                    // $array = file($filename);

                    // $sum = 0;
                    // foreach ($array as $num) {
                    //     $sum += (int)$num;
                    // }

                    // file_put_contents("sum.txt", $sum)

                    // file_put_contents("new.txt", "")


                    // unlink("test.txt");


                    // print_r(file_get_contents("test.txt"));
                    

                    $files = ["1.txt", "2.txt", "3.txt"];

                    foreach ($files as $file) {
                        unlink($file);
                    }

                ?>
            </h2>
        </main>
        <footer class="footer">
            <h2 class="footer__title">footer</h2>
        </footer>
    </div>
</body>

</html>