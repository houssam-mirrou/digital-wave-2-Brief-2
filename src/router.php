<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' =>  __DIR__ .'/controllers/index.php',
    '/propos' => __DIR__ . '/controllers/propos.php',
    '/contact' => __DIR__ . '/controllers/contact.php',
    '/services' => __DIR__ . '/controllers/services.php',
    '/sign-in' => __DIR__ . '/controllers/sign_in.php',
    '/sign-up' => __DIR__ . '/controllers/sign_up.php',
    '/profile' => __DIR__ . '/controllers/profile.php',
    '/sign-out' => __DIR__ . '/controllers/sign_out.php',
    '/admin' => __DIR__ . '/controllers/admin.php'
];



function route_to_controller($uri, $routes,$data)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


function route_to_layout($uri, $routes_layout,$data,$props = [])
{
    if (array_key_exists($uri, $routes_layout)) {
        extract($props);
        require $routes_layout[$uri];

    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require __DIR__ . '/views/'.$code.'.view.php';
    die();
}

route_to_controller($uri, $routes,$data);
