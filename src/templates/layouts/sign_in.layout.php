<section class="container mx-auto py-16">
    <div class="max-w-xl mx-auto p-8 rounded-xl shadow-xl bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
        
        <div class="text-center mb-8">
            <img src="../../img/wave2.png" alt="Your Company" class="mx-auto h-14 w-auto mb-4" />
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Connectez-vous à votre compte</h2>
        </div>

        <form class="space-y-6" action="#" method="POST">
            
            <div>
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Adresse E-mail</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    placeholder="name@company.com" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                    value="<?= isset($user_sing_in['email']) ? htmlspecialchars($user_sing_in['email']) : '' ?>"
                    required
                >
                <?php
                if (isset($user_sing_in['email']) && !valider_name($user_sing_in['email'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            <span class="font-bold">Erreur:</span> Veuillez entrer un email valide.
                        </p>';
                }
                ?>
            </div>

            <div>
                <div class="flex items-center justify-between mb-2">
                    <label for="password" class="text-sm font-semibold text-gray-700 dark:text-gray-300">Mot de passe</label>
                    <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-500 dark:text-blue-400">Mot de passe oublié ?</a>
                </div>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    placeholder="••••••••" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                    required
                >
                <?php
                if (isset($user_sing_in['password']) && !valider_name($user_sing_in['password'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            <span class="font-bold">Erreur:</span> Veuillez entrer un mot de passe valide (plus de 8 caractères).
                        </p>';
                }
                ?>
            </div>

            <button type="submit" class="w-full bg-gray-900 text-white font-bold py-3 rounded-lg hover:bg-gray-800 transition-colors duration-200 dark:bg-blue-600 dark:hover:bg-blue-700">
                Sign in
            </button>

            <p class="text-sm font-light text-center text-gray-500 dark:text-gray-400">
                Vous n'avez pas de compte ? <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Inscrivez-vous ici</a>
            </p>
        </form>
    </div>
</section>