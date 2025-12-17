<?php

$user_sing_in = [
    'email' => null,
    'password' => null
];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_SERVER['email'] ?? null;
    $password = $_SERVER['password'] ?? null;
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

    $user_sing_in['email'] = $email;
    $user_sing_in['password'] = $password;

    if(valider_email($email)){
        
    }

}


require __DIR__ . '/../views/sign_in.view.php';
