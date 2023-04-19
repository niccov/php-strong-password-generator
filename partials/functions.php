<?php 
function generatePassword($passwordLength) {

    $permitted_chars  =  '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ£!&%?#' ;

    $input_length = strlen($permitted_chars);
    $random_string = '';
    for($i = 0; $i < $passwordLength; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}
?>