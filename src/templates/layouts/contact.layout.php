<?php

require __DIR__ . '../../classes/Database.php';

$config = require __DIR__ . '../../classes/config.php';


$tableaux = [
    'username' => null,
    'email' => null,
    'description' => null
];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tableaux['username'] = $_POST["username"];
    $tableaux['email'] = $_POST["email"];
    $tableaux['description'] = $_POST["description"];
    if (valider_name($tableaux['username']) && valider_email($tableaux['email']) && valider_description($tableaux['description'])) {
        $tableaux['username'] = null;
        $tableaux['email'] = null;
        $tableaux['description'] = null;
    }
}

?>
<section class="container mx-auto py-16">
    <div class="max-w-xl mx-auto p-8 rounded-lg shadow-lg dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
        <h2 class="text-3xl font-bold text-center">Contactez-nous</h2>
        <form class="p-6 space-y-4" method="post">
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre nom</label>
                <input type="text" placeholder="Votre nom" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:text-white username" name="username" value=<?= $tableaux["username"] ?>>
                <?php
                if (!valider_name($tableaux['username']) && $tableaux['username'] !== null) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        <span class="font-bold">Erreur:</span> Vous devez écrire plus de deux caractères.
                    </p>';
                }
                ?>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre email</label>
                <input type="email" placeholder="Votre email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:text-white email" name="email" value=<?= $tableaux["email"] ?>>
                <?php
                if (!valider_email($tableaux['email']) && $tableaux['email'] !== null) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        <span class="font-bold">Erreur:</span> Veuillez entrer un email valide.
                    </p>';
                }
                ?>
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Votre message</label>
                <textarea placeholder="Votre message" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:text-white description" name="description"><?php echo $tableaux["description"] ?></textarea>
                <?php
                if (!valider_description($tableaux['description']) && $tableaux['description'] !== null) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        <span class="font-bold">Erreur:</span> La description doit contenir plus de 20 caractères.
                    </p>';
                }
                ?>
            </div>
            <button class="w-full bg-gray-900 text-white font-medium py-2.5 rounded-lg border-2 border-transparent hover:bg-white hover:text-black hover:border-black transition-all duration-300 transform hover:scale-[1.02]" name="password">Envoyer</button>
        </form>
    </div>

</section>
<?php
$data = new Database($config['database']);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $description = $_POST["description"];
    if (valider_les_champ($username, $email, $description) === true) {
        //ajouter un commentair dans le database;
        $query = 'insert into comments (name, email, descrip) 
                            values (:name,:email,:descrip)';
        $param = [
            ':name' => $username,
            ':email' => $email,
            ':descrip' => $description
        ];
        $data->query($query, $param);
    }
}
$comments = $data->query('select * from comments');

echo '<div class = "grid grid-cols-3 gap-4 p-3">';
foreach ($comments as $comment) {
    echo '
                <div class="dark:bg-white/[0.03] bg-white dark:border-gray-700 p-6 shadow-md rounded-lg">
                    <h2 class="text-3xl text-gray-400 font-bold mb-6 text-center">Exemple De Contact</h2>
                    <h2 class="text-xl text-gray-400 font-bold mb-3">Name : </h2>
                    <h2 class="text-2xl mb-3">' . $comment['name'] . '</h2>
                    <h2 class="text-xl text-gray-400 font-bold mb-3">Email : </h2>
                    <h2 class="text-2xl mb-3">' . $comment['email'] . '</h2>
                    <h2 class="text-xl text-gray-400 font-bold mb-3">Message</h2>
                    <h2 class="text-2xl mb-3">' . $comment['descrip'] . '</h2>
                </div>
            ';
}
echo '</div>';
