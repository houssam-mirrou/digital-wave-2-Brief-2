<?php

$routes_layout = [
    '/' =>  __DIR__ . '/layouts/index.layout.php',
    '/propos' => __DIR__ . '/layouts/propos.layout.php',
    '/services' => __DIR__ . '/layouts/services.layout.php',
    '/contact' => __DIR__ . '/layouts/contact.layout.php',
    '/sign-in' => __DIR__ . '/layouts/sign_in.layout.php',
    '/sign-up' => __DIR__ . '/layouts/sign_up.layout.php',
    '/profile' => __DIR__ . '/layouts/profile.layout.php'
];


echo '<main class="flex-1">';

route_to_layout($uri, $routes_layout,$data,[
    'tableaux' => $tableaux ?? null,
    'contacts' => $contacts ?? null,
    'user' => $user ?? null
]);

echo '</main>';
