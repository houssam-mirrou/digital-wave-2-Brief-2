<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex flex-col bg-slate-800 text-white">

    <header class="shadow-md bg-gray-900">
        <nav class="flex justify-between items-center p-4 w-full">
            <div class="flex flex-row items-center w-[80%]">
                <img src="/img/wave2.png" class="h-16">
                <div class="flex flex-row gap-6 items-center w-[100%]">
                    <h1 class="text-2xl font-bold ">DigitalWave</h1>
                    <div class="w-[100%]">
                        <ul class="flex gap-8 items-center">
                            <li>
                                <a href="/"
                                    class="transition-transform duration-300 inline-block <?= isUrl('/') ? 'text-white font-bold scale-110' : 'hover:scale-110 hover:font-bold' ?>">
                                    Accueil
                                </a>
                            </li>
                            <li>
                                <a href="/services"
                                    class="transition-transform duration-300 inline-block <?= isUrl('/services') ? 'text-white font-bold scale-110' : 'hover:scale-110 hover:font-bold' ?>">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="/propos"
                                    class="transition-transform duration-300 inline-block <?= isUrl('/propos') ? 'text-white font-bold scale-110' : 'hover:scale-110 hover:font-bold' ?>">
                                    À propos
                                </a>
                            </li>
                            <li>
                                <a href="/contact"
                                    class="transition-transform duration-300 inline-block <?= isUrl('/contact') ? 'text-white font-bold scale-110' : 'hover:scale-110 hover:font-bold' ?>">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <ul class="flex gap-4 items-center">
                    <?php if (!isset($_SESSION['user_id'])) {
                        echo '<li><a href="/sign-in" class="px-5 inline-block p-3 border-white bg-gray-900 text-white font-medium py-2.5 rounded-lg border-2 border-transparent hover:bg-white hover:text-black hover:border-black transition-all duration-300 transform hover:scale-[1.02] cursor-pointer">Connecter</a></li>';
                        echo '<li><a href="/sign-up" class="px-5 p-3 inline-block border-white bg-gray-900 text-white font-medium py-2.5 rounded-lg border-2 border-transparent hover:bg-white hover:text-black hover:border-black transition-all duration-300 transform hover:scale-[1.02] cursor-pointer">Inscription</a></li>';
                    } else {
                        if ($_SESSION['is_admin'] == 1) {
                            echo '<li><a href="/admin" class="px-5 inline-block p-3 border-white bg-gray-900 text-white font-medium py-2.5 rounded-lg border-2 border-transparent hover:bg-white hover:text-black hover:border-black transition-all duration-300 transform hover:scale-[1.02] cursor-pointer">Admin</a></li>';
                        } else {
                            echo '<li><a href="/profile" class="px-5 inline-block p-3 border-white bg-gray-900 text-white font-medium py-2.5 rounded-lg border-2 border-transparent hover:bg-white hover:text-black hover:border-black transition-all duration-300 transform hover:scale-[1.02] cursor-pointer">Profile</a></li>';
                        }
                        echo '<li><a href="/sign-out" class="px-5 p-3 inline-block border-white bg-gray-900 text-white font-medium py-2.5 rounded-lg border-2 border-transparent hover:bg-white hover:text-black hover:border-black transition-all duration-300 transform hover:scale-[1.02] cursor-pointer">Sign out</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>