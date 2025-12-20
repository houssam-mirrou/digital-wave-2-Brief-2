<section class="container mx-auto py-16">
    <div class="max-w-xl mx-auto p-8 rounded-xl shadow-xl bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
        
        <div class="text-center mb-8">
            <img src="../../img/wave2.png" alt="Your Company" class="mx-auto h-14 w-auto mb-4" />
            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Créer un compte</h2>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Rejoignez-nous dès aujourd'hui</p>
        </div>

        <form class="space-y-6" action="" method="POST">
            
            <div>
                <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Votre courriel</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    placeholder="name@company.com" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                    value="<?= isset($user["email"]) ? htmlspecialchars($user["email"]) : '' ?>"
                    required
                >
                <?php
                if (isset($user['email']) && !valider_email($user['email'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            <span class="font-bold">Erreur:</span> Veuillez entrer un email valide.
                        </p>';
                }
                ?>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="prenom" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Votre prénom</label>
                    <input 
                        type="text" 
                        name="prenom" 
                        id="prenom" 
                        placeholder="Prénom" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                        value="<?= isset($user["first_name"]) ? htmlspecialchars($user["first_name"]) : '' ?>"
                        required
                    >
                    <?php
                    if (isset($user['first_name']) && !valider_name($user['first_name'])) {
                        echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                                <span class="font-bold">Erreur:</span> +2 caractères requis.
                            </p>';
                    }
                    ?>
                </div>

                <div>
                    <label for="nom" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Votre nom</label>
                    <input 
                        type="text" 
                        name="nom" 
                        id="nom" 
                        placeholder="Nom" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                        value="<?= isset($user["last_name"]) ? htmlspecialchars($user["last_name"]) : '' ?>"
                        required
                    >
                    <?php
                    if (isset($user['last_name']) && !valider_name($user['last_name'])) {
                        echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                                <span class="font-bold">Erreur:</span> +2 caractères requis.
                            </p>';
                    }
                    ?>
                </div>
            </div>

            <div>
                <label for="phone" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Votre numéro de télephone</label>
                <input 
                    type="text" 
                    name="phone" 
                    id="phone" 
                    placeholder="+212 6 13 14 14 57" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                    value="<?= isset($user["phone"]) ? htmlspecialchars($user["phone"]) : '' ?>"
                    required
                >
                <?php
                if (isset($user['phone']) && !verifier_phone($user['phone'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            <span class="font-bold">Erreur:</span> Numéro de téléphone invalide.
                        </p>';
                }
                ?>
            </div>

            <div>
                <label for="bio" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Votre Biographie</label>
                <textarea 
                    name="bio" 
                    id="bio" 
                    rows="3"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400 resize-y" 
                    placeholder="Je suis un team manager..."
                ><?= isset($user["biographie"]) ? htmlspecialchars($user["biographie"]) : '' ?></textarea>
                <?php
                if (isset($user['biographie']) && !valider_description($user['biographie'])) {
                    echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                            <span class="font-bold">Erreur:</span> Minimum 20 caractères.
                        </p>';
                }
                ?>
            </div>

            <div class="space-y-6">
                <div>
                    <label for="password" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Mot de passe</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="••••••••" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                        value="<?= isset($user["password"]) ? htmlspecialchars($user["password"]) : '' ?>"
                        required
                    >
                    <?php
                    // Note: Assuming verifier_mot_pass takes (pass, confirm) logic
                    if (isset($user['password']) && isset($user['reconfirm_password']) && !verifier_mot_pass($user['password'], $user['reconfirm_password'])) {
                        echo '<p class="mt-2 text-sm text-red-600 dark:text-red-400">
                                <span class="font-bold">Erreur:</span> Mot de passe invalide ou ne correspond pas.
                            </p>';
                    }
                    ?>
                </div>

                <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Confirmez le mot de passe</label>
                    <input 
                        type="password" 
                        name="confirm-password" 
                        id="confirm-password" 
                        placeholder="••••••••" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400" 
                        value="<?= isset($user["reconfirm_password"]) ? htmlspecialchars($user["reconfirm_password"]) : '' ?>"
                        required
                    >
                </div>
            </div>

            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">J'accepte <a class="font-medium text-blue-600 hover:underline dark:text-blue-500" href="#">Les Conditions Générales</a></label>
                </div>
            </div>

            <button type="submit" class="w-full bg-gray-900 text-white font-bold py-3 rounded-lg hover:bg-gray-800 transition-colors duration-200 dark:bg-blue-600 dark:hover:bg-blue-700">
                Créer un compte
            </button>

            <p class="text-sm font-light text-center text-gray-500 dark:text-gray-400">
                Vous avez déjà un compte ? <a href="sign-in.php" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Connectez-vous ici</a>
            </p>
        </form>
    </div>
</section>