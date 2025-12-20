<?php

if (!isset($_SESSION['user_id'])) {
    header('Location: /');
    exit();
}

$profile_user = return_user_information($_SESSION['user_id'], $data);
$form_inputs = $profile_user;
$errors = [];

// edit admin profile

if ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['first_name']) || isset($_POST['last_name'])
    || isset($_POST['email']) || isset($_POST['phone']) || isset($_POST['biography']))) {

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
        
        header('Location: /admin');
        exit();
    }
}

$active_tab = 'profile'; 

// delete user from table

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_user_id'])){
    $user_id = $_POST['delete_user_id'];
    $active_tab = 'users';
    $delete_user_result = delete_user($user_id,$data);
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_contact_id'])){
    $contact_id = $_POST['delete_contact_id'];
    $active_tab = 'contacts';
    $delete_user_result = delete_contact($contact_id,$data);
}


$all_users = return_all_users($data);

$all_contacts = return_all_contacts($data);

require __DIR__ . '/../views/admin.view.php';
