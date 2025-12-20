<section class="container mx-auto py-16">
    <div class="max-w-xl mx-auto p-8 rounded-xl shadow-xl bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
        
        <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-8">Contactez-nous</h2>
        
        <form class="space-y-6" method="post">
            <div>
                <label for="username" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Votre nom</label>
                <input 
                    type="text" 
                    id="username"
                    name="username"
                    placeholder="Votre nom" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                    value="<?= $tableaux["username"] ?>"
                >
                <?php
                if (!valider_name($tableaux['username']) && $tableaux['username'] !== null) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                        <span class="font-bold">Erreur:</span> Vous devez écrire plus de deux caractères.
                    </p>';
                }
                ?>
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Votre email</label>
                <input 
                    type="email" 
                    id="email"
                    name="email"
                    placeholder="Votre email" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                    value="<?= $tableaux["email"] ?>"
                >
                <?php
                if (!valider_email($tableaux['email']) && $tableaux['email'] !== null) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                        <span class="font-bold">Erreur:</span> Veuillez entrer un email valide.
                    </p>';
                }
                ?>
            </div>

            <div>
                <label for="description" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Votre message</label>
                <textarea 
                    id="description"
                    name="description"
                    placeholder="Votre message" 
                    rows="4"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400 resize-y"
                ><?php echo $tableaux["description"] ?></textarea>
                <?php
                if (!valider_description($tableaux['description']) && $tableaux['description'] !== null) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                        <span class="font-bold">Erreur:</span> La description doit contenir plus de 20 caractères.
                    </p>';
                }
                ?>
            </div>

            <button class="w-full bg-gray-900 text-white font-bold py-3 rounded-lg hover:bg-gray-800 transition-colors duration-200 dark:bg-gray-700 dark:hover:bg-gray-900" name="password">
                Envoyer
            </button>
        </form>
    </div>
</section>