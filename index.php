<?php

require_once './models/product.php';

$pranzetti = new Product("croc", "buonissimi", "12$", "cane", "img")
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/style.css">
</head>
<body>
    <h1>PODOTTI ANIMALI</h1>

    <div id="container">
        <div><?php echo $pranzetti->name ?></div>
        <div><?php echo $pranzetti->description ?></div>
        <div><?php echo $pranzetti->price ?></div>
        <div><?php echo $pranzetti->category ?></div>
        <div><?php echo $pranzetti->imgProduct ?></div>
    </div>
</body>
</html>