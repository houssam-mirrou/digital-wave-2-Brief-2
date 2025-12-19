<?php

if(isset($_SESSION['user_id'])){
    header("Location: /");
    exit();
}

$user_sing_in = [
    'email' => null,
    'password' => null
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    $user_sing_in['email'] = $email;
    $user_sing_in['password'] = $password;

    if (valider_email($email)) {
        if (!email_available($email, $data)) {
            $result = same_password($email, $password, $data);
            if ($result == true) {
                $current_user = return_user_id($email, $data);
                $_SESSION['user_id'] = $current_user['id'];
                header('Location: /');
                exit();
            }
        }
    }
}


require __DIR__ . '/../views/sign_in.view.php';
