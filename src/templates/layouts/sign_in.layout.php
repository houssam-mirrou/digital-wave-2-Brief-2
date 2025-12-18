<section>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">

        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="pt-4">
                <img src="../../img/wave2.png" alt="Your Company" class="mx-auto h-14 w-auto" />
                <h2 class="text-white text-center text-2xl/9 font-bold tracking-tight">Connectez-vous à votre compte</h2>
            </div>
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <form class="space-y-4 md:space-y-6" action="#" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse E-mail</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        <?php
                        if (!valider_name($user_sing_in['email']) && $user_sing_in['email'] !== null) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-bold">Erreur:</span> Veuillez entrer un email valide.
                                </p>';
                        }
                        ?>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Mot de passe oublié ?</a>
                            </div>
                        </div>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        <?php
                        if (!valider_name($user_sing_in['password']) && $user_sing_in['password'] !== null) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-bold">Erreur:</span> Veuillez entrer un mot de pass valide (doit etre plus que 8 caractères).
                                </p>';
                        }
                        ?>
                    </div>
                    <button type="submit" class="w-full border-white bg-gray-700 text-white font-medium py-2.5 rounded-lg border-2 border-transparent hover:bg-white hover:text-black hover:border-black transition-all duration-300 transform hover:scale-[1.02]">Sign in</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Vous n'avez pas de compte ? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Inscrivez-vous ici</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>