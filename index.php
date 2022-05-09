<?php

include __DIR__ . '/API/dischi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <img src="./asset/img/logo-small.svg" alt="Spotify Logo" class="logo">
        </div>
    </header>
    <main class="overflow-auto">
        <div class="container">
            <div class="row row-cols-5 py-5 gx-5">
            <?php
                foreach($database as $dischi) {
                    echo "<div class='px-4 my-3'>
                            <div class='card h-100'>
                                <img src=" . $dischi['poster'] ."  class='img-fluid p-3'alt='...'>
                                <div class='card-body text-center '>
                                    <h5 class='card-title'>" . $dischi['title'] . "</h5>
                                    <p class='card-text'>" . $dischi['author'] . "</p>
                                    <p class='card-text'>" . $dischi['year'] . "</p>
                                </div>
                            </div>
                        </div>";
                };
            ?>
            </div>
        </div>
    </main>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>