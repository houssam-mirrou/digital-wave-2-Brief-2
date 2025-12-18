<?php

if(!isset($_SESSION['user'])){
    header('Location: /');
}

$profile_user = $_SESSION['user'];

require __DIR__ . '/../views/profile.view.php';
