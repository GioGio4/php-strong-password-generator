<?php
// Funzione che genera un numero casuale 
function generate_password($password_lenght)
{
    $password_generate = '';
    $characters_list = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()_+-={}[]|:;"<>,.?/';
    for ($i = 0; $i < $password_lenght; $i++) {
        $password_generate .= $characters_list[rand(0, strlen($characters_list) - 1)];
    }
    return  $password_generate;
}
