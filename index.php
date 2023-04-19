<?php


$permitted_chars  =  '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ£!&%?#' ;

function generatePassword($_GET['passwordLength']) {

    $input_length = strlen($permitted_chars);
    $random_string = '';
    for($i = 0; $i < $_GET['passwordLength']; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}
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
            <input type="number"  min="0" max="10" name="passwordLength">
            <input type="submit" <?php echo generatePassword() ?>>
        </form>
    </div>
</body>
</html>