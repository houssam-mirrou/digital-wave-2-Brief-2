<?php

function dd ($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function isUrl($value)
{
    if (parse_url($_SERVER['REQUEST_URI'])['path'] === $value) {
        return true;
    }
    return false;
}


function valider_name($name)
{
    if ($name === null) {
        return false;
    }
    $regex = "/^[A-Za-z]{3,}$/";
    if (preg_match($regex, $name)) {
        return true;
    }
    return false;
}
function valider_email($email)
{
    if ($email === null) {
        return false;
    }
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function verifier_phone($phone)
{
    if ($phone == null) {
        return false;
    }
    $regex = "/^\+?[0-9]{8,15}$/";

    if (preg_match($regex, $phone)) {
        return true;
    }
    return false;
}

function verifier_mot_pass($password, $reconfirm_password)
{
    if ($password == null) {
        return false;
    }
    if ($password != $reconfirm_password) {
        return false;
    }

    $regex = "/^[A-Za-z0-9#@&!%$]{8,}$/";

    if (preg_match($regex, $password)) {
        return true;
    }
    return false;
}

function valider_description($description)
{
    if ($description === null) {
        return false;
    }
    $regex = "/^.{20,}$/s";
    if (preg_match($regex, $description)) {
        return true;
    }
    return false;
}

//verifier si email et deja prené par un personne

function email_available($email, $data)
{
    $query = 'SELECT email from users where email = ?;';
    $result = $data->query($query, [$email]);
    if ($result == []) {
        return true;
    }
    return false;
}

//verifier si le numero de telephone est deja prenait par un personne

function phone_available($phone, $data)
{
    $query = 'SELECT phone_number from users where phone_number = ?';
    $result = $data->query($query, [$phone]);
    if ($result == []) {
        return true;
    }
    return false;
}

//verifier si le password match the password in the data base

function same_password($email, $password, $data)
{
    $query = 'SELECT mot_de_pass from users where email = ?';
    $result = $data->query($query, [$email]);
    if(password_verify($password,$result[0]['mot_de_pass'])){
        return true;
    }
    return false;
}

function return_user_information($email,$data){
    $query = 'SELECT * from users where email = ?;';
    $result = $data->query($query, [$email]);
    if ($result == []) {
        return null;
    }
    return $result[0];
}