<section>
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto ">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="pt-4">
                <img src="../../img/wave2.png" alt="Your Company" class="mx-auto h-14 w-auto" />
                <h2 class="text-white text-center text-2xl/9 font-bold tracking-tight">S'inscrire</h2>
            </div>
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Créer un compte
                </h1>
                <form class="space-y-4 md:space-y-6" action="sign-in" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre courriel</label>
                        <input value="<?= $user["email"] ?>" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        <?php
                        if (!valider_name($user['email']) && $user['email'] !== null) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-bold">Erreur:</span> Veuillez entrer un email valide.
                                </p>';
                        }
                        ?>
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-col w-1/2">
                            <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre prénom</label>
                            <input value="<?= $user["first_name"] ?>" type="text" name="prenom" id="prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Prénom" required="">
                            <?php
                            if (!valider_name($user['first_name']) && $user['first_name'] !== null) {
                                echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <span class="font-bold">Erreur:</span> Vous devez écrire plus de deux caractères.
                                    </p>';
                            }
                            ?>
                        </div>
                        <div class="flex flex-col w-1/2">
                            <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
                            <input value="<?= $user["last_name"] ?>" type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nom" required="">
                            <?php
                            if (!valider_name($user['last_name']) && $user['last_name'] !== null) {
                                echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <span class="font-bold">Erreur:</span> Vous devez écrire plus de deux caractères.
                                    </p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre numéro de télephone</label>
                        <input value="<?= $user["phone"] ?>" type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+212 6 13 14 14 57" required="">
                        <?php
                        if (!valider_name($user['phone']) && $user['phone'] !== null) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-bold">Erreur:</span> Veuillez entrer un nombre de télephone valide.
                                </p>';
                        }
                        ?>
                    </div>
                    <div>
                        <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre Biographie</label>
                        <textarea name="bio" id="bio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Je suis un team manager qui est tres ..." required="">
                            <?= $user["biographie"] ?>
                        </textarea>
                        <?php
                        if (!valider_name($user['biographie']) && $user['biographie'] !== null) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-bold">Erreur:</span> La biographie doit contenir plus de 20 caractères.
                                </p>';
                        }
                        ?>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                        <input value="<?= $user["password"] ?>" type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        <?php
                        if (!valider_name($user['password']) && $user['password'] !== null) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-bold">Erreur:</span> Veuillez entrer un mot de pass valide (doit etre plus que 8 caractères).
                                </p>';
                        }
                        ?>
                    </div>
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmez le mot de passe</label>
                        <input value="<?= $user["reconfirm_password"] ?>"type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        <?php
                        if (!valider_name($user['password']) && $user['password'] !== null) {
                            echo '<p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-bold">Erreur:</span> Veuillez entrer un mot de pass valide.
                                </p>';
                            
                        }
                        ?>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">J'accepte <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Les Conditions Générales</a></label>
                        </div>
                    </div>
                    <button type="submit" class="w-full border-white bg-gray-700 text-white font-medium py-2.5 rounded-lg border-2 border-transparent hover:bg-white hover:text-black hover:border-black transition-all duration-300 transform hover:scale-[1.02]">Create an account</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="sign-in" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>