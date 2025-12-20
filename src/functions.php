<?php

//function that shows the values of a variable

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

//function that checks the value is the url for the header 

function isUrl($value)
{
    if (parse_url($_SERVER['REQUEST_URI'])['path'] === $value) {
        return true;
    }
    return false;
}

//function that validate name 

function valider_name($name)
{
    if ($name === null) {
        return false;
    }
    $regex = "/^[A-Za-z ]{3,}$/";
    if (preg_match($regex, $name)) {
        return true;
    }
    return false;
}

// function validate the number


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

//function that validate the email

function valider_email($email)
{
    if ($email === null) {
        return false;
    }
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

//function that validate the description

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

function same_password($email, $password, $data,$is_admin = 0)
{
    $query = 'SELECT mot_de_pass from users where email = ?;';
    $result = $data->query($query, [$email]);
    if($is_admin == 1){
        if($password == $result[0]['mot_de_pass']){
            return true;
        }
    }
    else if(password_verify($password,$result[0]['mot_de_pass'])){
        return true;
    }
    else {
        return false;
    }
}

// fonction qui retourner user id

function return_user_id($email,$data){
    $query = 'SELECT id from users where email = ?;';
    $result = $data->query($query, [$email]);
    if ($result == []) {
        return [];
    }
    return $result[0];
}

// fonction qui retourne le user information

function return_user_information($id,$data){
    $query = 'SELECT * from users where id = ?;';
    $result = $data->query($query,[$id]);
    if($result == []){
        return [];
    }
    return $result[0];
}

// fonction qui retourne if user est admin ou pas

function return_if_user_admin($email,$data){
    $query = 'SELECT is_admin from users where email = ?;';
    $result = $data->query($query, [$email]);
    if ($result == []) {
        return [];
    }
    return $result[0]['is_admin'];
}

// get all users from data_base

function return_all_users($data){
    $query = 'SELECT id,first_name,last_name,email,phone_number,biography,date_inscription from users where is_admin=0;';
    $result = $data->query($query);
    if($result == []){
        return [];
    }
    return $result;
}

// delete user from data base

function delete_user ($id,$data) {
    $query = 'DELETE from users where id=?';
    $result = $data->query($query,[$id]);
    return $result;
}

//get all contacts in database

function return_all_contacts($data){
    $query = 'SELECT * FROM contacts';
    $result = $data->query($query);
    if($result==[]){
        return [];
    }
    return $result;
}

// delete contact from data base

function delete_contact ($contact_id,$data) {
    $query = 'DELETE from contacts where id=?';
    $result = $data->query($query,[$contact_id]);
    return $result;
}