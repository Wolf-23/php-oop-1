<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP</title>
</head>
<body>
    <?php
        require_once __DIR__ . "/movie.php";
        $movie1 = new Movie("Beast", "Baltasar Kormákur", "Thriller" );
        $movie2 = new Movie("Avatar", "James Cameron", "Azione" );
        $movie3 = new Movie("Maigret", "Patrice Leconte", "Giallo" );
    ?>
    <div class="container">
        <div class="movie">
            <?php $movie1->getMovie()?>
        </div>
        <div class="movie">
            <?php $movie2->getMovie()?>
        </div>
        <div class="movie">
            <?php $movie3->getMovie()?>
        </div>
    </div>
</body>
</html>