<?php

include __DIR__ . '/API/dischi.php';
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
    <?php
    foreach($database as $dischi) {
        echo "<div>" . $dischi['title'] . "</div>";
    }
    ?>
</body>
</html>