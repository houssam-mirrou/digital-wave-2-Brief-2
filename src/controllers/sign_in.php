<?php

if(isset($_SESSION['user'])){
    header("Location: /");
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
                $current_user = return_user_information($email, $data);
                $_SESSION['user'] = [
                    'first_name' => $current_user['first_name'],
                    'last_name' => $current_user['last_name'],
                    'email' => $current_user['email'],
                    'phone_number' => $current_user['phone_number'],
                    'biography' => $current_user['biography'],
                    'date_inscription' => $current_user['date_inscription']
                ];
                header('Location: /');
                exit();
            }
        }
    }
}


require __DIR__ . '/../views/sign_in.view.php';
