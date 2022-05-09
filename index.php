<!-- <?php

// include __DIR__ . '/API/dischi.php';
?> -->
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
<!--  milestone 1:
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
-->
<!-- Milestone 2: -->
    <div id="app">
                <main class="overflow-auto">
                    <div class="container">
                        <div class="row row-cols-5 py-5 gx-5">
                            <div class="px-4 my-3" v-for="element in discArray">
                                <div class="card h-100">
                                    <img :src="`${element.poster}`" class="img-fluid p-3" :alt="`${element.title}`">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"> {{element.title}}</h5>
                                        <p class="card-text"> {{element.author}}</p>
                                        <p class="card-text"> {{element.year}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
    </div>
            <!-- </div>
        </div> -->
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./asset/app.js"></script>

</body>
</html>