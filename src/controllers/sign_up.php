<?php

<<<<<<< Updated upstream
require __DIR__ . '/../views/sign_up.view.php';
=======
if(isset($_SESSION['user'])){
    header("Location: /");
}

$user = [
    'email' => null,
    'first_name' => null,
    'last_name' => null,
    'phone' => null,
    'biographie' => null,
    'password' => null,
    'reconfirm_password' => null
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'] ?? null;
    $first_name = $_POST['prenom'] ?? null;
    $last_name = $_POST['nom'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $biography = $_POST['bio'] ?? null;
    $password = $_POST['password'] ?? null;
    $reconfirm_password = $_POST['confirm-password'] ?? null;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $user['first_name'] = $first_name;
    $user['last_name'] = $last_name;
    $user['email'] = $email;
    $user['phone'] = $phone;
    $user['biographie'] = $biography;
    $user['password'] = $first_name;
    $user['reconfirm_password'] = $reconfirm_password;
    if (
        valider_name($first_name) && verifier_phone($phone) && verifier_mot_pass($password, $reconfirm_password)
        && valider_email($email)
    ) {
        if (email_available($email, $data) && phone_available($phone, $data)) {
            if (strlen($biography) != 0) {
                if (valider_description($biography)) {
                    $query = 'insert into users (first_name,last_name,email,phone_number,biography,
                    mot_de_pass) values(?,?,?,?,?,?)';
                    $params = [
                        $first_name,
                        $last_name,
                        $email,
                        $phone,
                        $biography,
                        $hashed_password
                    ];

                    $data->query($query, $params);

                    $user['first_name'] = null;
                    $user['last_name'] = null;
                    $user['email'] = null;
                    $user['phone'] = null;
                    $user['biographie'] = null;
                    $user['password'] = null;
                    $user['reconfirm_password'] = null;

                    header('Location: /sign-in');
                    exit();
                }
            } else {

                $query = 'insert into users (first_name,last_name,email,phone_number,
                    mot_de_pass) values(?,?,?,?,?)';
                $params = [
                    $first_name,
                    $last_name,
                    $email,
                    $phone,
                    $hashed_password
                ];
                $data->query($query, $params);


                $user['first_name'] = null;
                $user['last_name'] = null;
                $user['email'] = null;
                $user['phone'] = null;
                $user['biographie'] = null;
                $user['password'] = null;
                $user['reconfirm_password'] = null;

                header('Location: /sign-in');
                exit();
            }
        }
    }
}



require __DIR__ . '/../views/sign_up.view.php';
>>>>>>> Stashed changes
