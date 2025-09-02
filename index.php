<?php
// Example of Array in use

$chocolate_cake =   [
                        'Chocolate Cake',
                        '45 min',
                        'Cake made with Chocolate',
                        '5634'
                    ];
// print_r($chocolate_cake);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-learning</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">

        <h1> <?php  echo $chocolate_cake[0] ?></h1>
        <p> ID: <?php  echo $chocolate_cake[3] ?></p>
        <p>Duration: <?php  echo $chocolate_cake[1] ?></p>
        <p>Description: <?php  echo $chocolate_cake[2] ?></p>

    </div>
</body>
</html>