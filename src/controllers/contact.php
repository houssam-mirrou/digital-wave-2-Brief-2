<?php

$tableaux = [
    'username' => null,
    'email' => null,
    'description' => null
];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? null;
    $email = $_POST["email"] ?? null;
    $description = $_POST["description"] ?? null;

    $tableaux['username'] = $username;
    $tableaux['email'] = $email;
    $tableaux['description'] = $description;
    if (valider_name($tableaux['username']) && valider_email($tableaux['email']) && valider_description($tableaux['description'])) {
        //ajouter un commentair dans le database;
        $query = 'insert into contacts (name, email, descrip) 
                            values (?,?,?)';
        $param = [
            $username,
            $email,
            $description
        ];
        $data->query($query, $param);
        
        $tableaux['username'] = null;
        $tableaux['email'] = null;
        $tableaux['description'] = null;
    }
}

$contacts = $data->query('select * from contacts');


require __DIR__ . '/../views/contact.view.php';
