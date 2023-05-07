<?php
require_once './traits/weigthable.php';
require_once './models/product.php';
require_once './models/cibo.php';
require_once './models/giochi.php';
require_once './models/cucce.php';
require_once './db.php';

try {
    $pranzetti->getGrams();
    
} catch (Exception $error) {
    
    echo $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>PRODOTTI ANIMALI</h1>

    <div id="container">
        <?php
         foreach($products as $singleProduct) {
         
        ?>    
       <div id="container-card">
           <h3 id="name">Nome: <?= $singleProduct->getName() ?> </h3>

           <p>
             Descrizione: <?= $singleProduct->getDescription() ?> <br>
             Prezzo: <?= $singleProduct->getPrice() ?> <br>
             <?= $singleProduct->getCategory() ?> <br>

             <?php

              switch(get_class($singleProduct)) {

                case 'Giochi':
                  echo "Caratteristiche: " . $singleProduct->getCaratteristiche();
                  break;

                case 'Cucce':
                  echo "Materiale: " .  $singleProduct->getDimensioni();
                  break;

                case 'Cibo':
                  echo "Scadenza: " . $singleProduct->getScadenza();
                  break;  

                default: 
                  echo "<br>";
                  break;
              }

              ?>
           </p>
       </div>

       <?php
         };
        ?> 
    </div>
</body>
</html>