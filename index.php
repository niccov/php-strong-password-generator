<?php

include __DIR__ . '/partials/functions.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <div>
       
        <form action="index.php" method="GET">
            <input type="number"  min="0" max="20" name="passwordLength">
            <input type="submit" >
        </form>

        <?php
        if (isset($_GET['passwordLength'])) {
            echo generatePassword($_GET['passwordLength']);
        }
         ?>
    </div>
</body>
</html>