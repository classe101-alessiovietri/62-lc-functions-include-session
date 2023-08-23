<?php
    var_dump(__DIR__);

    include __DIR__ . '/vars.php';

    var_dump($color);

    $test = 3;

    function sum($numOne, $numTwo) {
        return $numOne + $numTwo;
    }

    $sum = sum(2, $test);

    var_dump($sum);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
        <main>
            <?php include __DIR__ . '/partials/main.php'; ?>
        </main>

    </body>
</html>