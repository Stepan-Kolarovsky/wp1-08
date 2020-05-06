<?php


define('MAX_NUMBER', 100);
define('MIN_NUMBER', 0);
$guessNumber = rand(MIN_NUMBER, MAX_NUMBER);
$yourNumber = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p> Hádej číslo mezi <?= MIN_NUMBER ?> - <?= MAX_NUMBER ?> </p>


<?php
while ($guessNumber != $yourNumber) {   ?>
        <?php
            if ($yourNumber < $guessNumber) { ?>
              <p>Hádané číslo: <?= $yourNumber ?> Musí být větší.</p>   <?php

            }  else { ?>
              <p>Hádané číslo: <?= $yourNumber ?> Musí být menší.</p>   <?php
            } ?>



<?php
        $yourNumber = rand(MIN_NUMBER, MAX_NUMBER);

}
?>

<p>Gratulujem, uhádl jsi číslo guessNumber= <?= $guessNumber ?> svým číslem <?= $yourNumber ?></p>

</body>
</html>