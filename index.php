<?php
    require_once __DIR__ .'/classes/movie.php';

    $movies = [
        new Movie('Top Gun','Tony Scott','1986','true'),
        new Movie('The Godfather','Francis Ford Coppola','1972','true'),
        new Movie('Gold','Anthony Hayes','2022','false'),
        new Movie('Altrimenti ci Arrabbiamo','Marcello Fondato','1974','false'),


    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Collezione di Marcello</h1>
    <ul>
        <?php foreach($movies as $movie){ ?>
            <li>
                <h4>Titolo:<?php echo $movie->title; ?></h4>
                <h4>Regista:<?php echo $movie->director; ?></h4>
                <h4>Anno:<?php echo $movie->year; ?></h4>
                <h4><?php echo $movie->oscar; ?></h4>
            </li>

        <?php } ?>
    </ul>
    
</body>
</html>