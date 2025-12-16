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

function valider_les_champ($name, $email, $description)
{
    if (!valider_name($name)) {
        echo '
            <script>
                const name_input = document.querySelector(".username");
                console.log(name_input);
                name_input.focus();
            </script>
        ';
        return false;
    }
    if (!valider_email($email)) {
        echo '
            <script>
                const email_input = document.querySelector(".email");
                email_input.focus();
            </script>
        ';
        return false;
    }
    if (!valider_description($description)) {
        echo '
            <script>
                const description_input = document.querySelector(".description");
                description_input.focus();
            </script>
        ';
        return false;
    }
    return true;
}