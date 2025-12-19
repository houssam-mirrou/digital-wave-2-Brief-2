<?php

if (!isset($_SESSION['user_id'])) {
    header('Location: /');
    exit();
}

$profile_user = return_user_information($_SESSION['user_id'], $data);
$form_inputs = $profile_user;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first_name = $_POST['first_name'] ?? null;
    $last_name = $_POST['last_name'] ?? null;
    $email = $_POST['email'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $biography = $_POST['biography'] ?? null;


    $form_inputs['first_name'] = $first_name;
    $form_inputs['last_name'] = $last_name;
    $form_inputs['email'] = $email;
    $form_inputs['phone_number'] = $phone;
    $form_inputs['biography'] = $biography;

    if (!valider_name($first_name)) {
        $errors['first_name'] = "Le prénom doit contenir au moins 3 lettres.";
    }
    if (!valider_name($last_name)) {
        $errors['last_name'] = "Le nom doit contenir au moins 3 lettres.";
    }
    if (!verifier_phone($phone)) {
        $errors['phone'] = "Numéro de téléphone invalide.";
    }

    if (!valider_email($email)) {
        $errors['email'] = "Email invalide.";
    } else {
        $current_db_user = return_user_information($_SESSION['user_id'], $data);
        if ($current_db_user['email'] !== $email) {
            if (!email_available($email, $data)) {
                $errors['email'] = "Cet email est déjà pris.";
            }
        }
    }

    $current_db_user = return_user_information($_SESSION['user_id'], $data);
    if ($current_db_user['phone_number'] !== $phone) {
        if (!phone_available($phone, $data)) {
            $errors['phone'] = "Ce numéro est déjà pris.";
        }
    }

    if (!empty($biography) && !valider_description($biography)) {
        $errors['biography'] = "La biographie doit contenir au moins 20 caractères.";
    }
    if (empty($errors) == true) {

        $query = 'UPDATE users SET 
                  email = ?, 
                  first_name = ?, 
                  last_name = ?, 
                  phone_number = ?, 
                  biography = ? 
                  WHERE id = ?';

        $params = [
            $email,
            $first_name,
            $last_name,
            $phone,
            $biography,
            $_SESSION['user_id']
        ];

        $data->query($query, $params);
        
        header('Location: /profile');
        exit();
    }
}



require __DIR__ . '/../views/profile.view.php';
