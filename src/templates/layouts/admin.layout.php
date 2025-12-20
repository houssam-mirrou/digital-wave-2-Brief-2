<div class="container mx-auto px-4 sm:px-6 lg:px-8  min-h-screen">

    <div id="deleteUserModal" class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm transition-opacity">
        <div class="relative w-full max-w-lg px-4 h-auto">
            <div class="bg-white rounded-xl shadow-2xl dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
                <div class="flex justify-between items-center p-6 border-b border-gray-100 dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Sure you want to delete this user?</h3>
                    <button id="close_deleteUserModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-100 hover:text-gray-900 rounded-lg text-sm p-2 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-8 space-y-6">
                    <div class="flex items-center gap-4 pt-2">
                        <button id="cancel_deleteUserModal" type="button" class="text-gray-700 bg-white hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-300 text-sm font-bold px-5 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 w-1/2 transition-colors">
                            Cancel
                        </button>
                        <button id="submit_deleteUserModal" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-bold rounded-lg text-sm px-5 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 w-1/2 transition-colors">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="deleteContactModal" class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm transition-opacity">
        <div class="relative w-full max-w-lg px-4 h-auto">
            <div class="bg-white rounded-xl shadow-2xl dark:bg-gray-800 border border-gray-100 dark:border-gray-700">
                <div class="flex justify-between items-center p-6 border-b border-gray-100 dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Sure you want to delete this contact?</h3>
                    <button id="close_deleteContactModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-100 hover:text-gray-900 rounded-lg text-sm p-2 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-8 space-y-6">
                    <div class="flex items-center gap-4 pt-2">
                        <button id="cancel_deleteContactModal" type="button" class="text-gray-700 bg-white hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-300 text-sm font-bold px-5 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 w-1/2 transition-colors">
                            Cancel
                        </button>
                        <button id="submit_deleteContactModal" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-bold rounded-lg text-sm px-5 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 w-1/2 transition-colors">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="editModal" class="<?= ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors)) ? '' : 'hidden' ?> fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm transition-opacity">
        <div class="relative w-full max-w-2xl px-4 h-auto">
            <div class="bg-white rounded-xl shadow-2xl dark:bg-gray-800 border border-gray-100 dark:border-gray-700">

                <div class="flex justify-between items-center p-6 border-b border-gray-100 dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Edit Profile</h3>
                    <button id="close_edit" type="button" class="text-gray-400 bg-transparent hover:bg-gray-100 hover:text-gray-900 rounded-lg text-sm p-2 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <form action="" method="POST" class="p-8 space-y-6">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">First Name</label>
                            <input type="text" name="first_name" id="first_name" value="<?= $form_inputs['first_name'] ?>"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white transition-colors" required>
                            <?php if (isset($errors['first_name'])): ?>
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['first_name'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Last Name</label>
                            <input type="text" name="last_name" id="last_name" value="<?= $form_inputs['last_name'] ?>"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white transition-colors" required>
                            <?php if (isset($errors['last_name'])): ?>
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['last_name'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email" value="<?= $form_inputs['email'] ?>"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white transition-colors" required>
                            <?php if (isset($errors['email'])): ?>
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['email'] ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Phone Number</label>
                            <input type="text" name="phone" id="phone" value="<?= $form_inputs['phone_number'] ?>"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white transition-colors">
                            <?php if (isset($errors['phone'])): ?>
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['phone'] ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div>
                        <label for="biography" class="block mb-2 text-sm font-semibold text-gray-700 dark:text-gray-300">Biography</label>
                        <textarea name="biography" id="biography" rows="4"
                            class="block w-full px-4 py-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white transition-colors resize-y"><?= $form_inputs['biography'] != null ? $form_inputs['biography'] : '' ?></textarea>
                        <?php if (isset($errors['biography'])): ?>
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['biography'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100 dark:border-gray-700">
                        <button id="cancel_edit" type="button" class="text-gray-700 bg-white hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-300 text-sm font-bold px-5 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 w-1/2 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="text-white bg-gray-900 hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-500 font-bold rounded-lg text-sm px-5 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-1/2 transition-colors">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-7xl p-4 md:p-6">

        <div class="rounded-xl border border-gray-100 bg-white p-8 lg:p-10 shadow-lg dark:border-gray-700 dark:bg-gray-800">
            <div class="flex flex-row gap-8 mb-8 border-b border-gray-100 dark:border-gray-700 pb-4">
                <h3 class="text-lg font-bold text-gray-900 lg:text-xl dark:text-white cursor-pointer profile-header hover:text-blue-600 transition-all <?= $active_tab !== 'profile' ? 'opacity-40 hover:opacity-100' : '' ?>">
                    Profile
                </h3>
                <h3 class="text-lg font-bold text-gray-900 lg:text-xl dark:text-white cursor-pointer users-header hover:text-blue-600 transition-all <?= $active_tab !== 'users' ? 'opacity-40 hover:opacity-100' : '' ?>">
                    Edit Users
                </h3>
                <h3 class="text-lg font-bold text-gray-900 lg:text-xl dark:text-white cursor-pointer contact-header hover:text-blue-600 transition-all <?= $active_tab !== 'contacts' ? 'opacity-40 hover:opacity-100' : '' ?>">
                    See contacts
                </h3>
            </div>

            <div class="profile-modal <?= $active_tab !== 'profile' ? 'hidden' : '' ?>">
                <div class="mb-8 rounded-xl p-6 lg:p-8 border border-gray-200  dark:border-gray-700">
                    <div class="flex flex-col gap-6 xl:flex-row xl:items-center xl:justify-between">
                        <div class="flex w-full flex-col items-center gap-6 xl:flex-row">
                            <div class="h-24 w-24 overflow-hidden rounded-full border-4 border-white shadow-md dark:border-gray-700">
                                <img src="../../img/user.png" alt="user" class="w-full h-full object-cover">
                            </div>
                            <div class="order-3 xl:order-2 text-center xl:text-left">
                                <h4 class="mb-2 text-2xl font-bold text-gray-900 dark:text-white">
                                    <?= $profile_user['first_name'] . ' ' . $profile_user['last_name'] ?>
                                </h4>
                                <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                                        Been a user since : <?= $profile_user['date_inscription'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl border border-gray-200 p-6 lg:p-8 dark:border-gray-700">
                    <div class="flex flex-col gap-8 lg:flex-row lg:items-start lg:justify-between">
                        <div class="w-full">
                            <h4 class="text-xl font-bold text-gray-900 mb-6 dark:text-white">
                                Personal Information
                            </h4>

                            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-8">
                                <div>
                                    <p class="mb-2 text-xs font-bold uppercase tracking-wider text-gray-400 dark:text-gray-500">
                                        First Name
                                    </p>
                                    <p class="text-base font-semibold text-gray-900 dark:text-white">
                                        <?= $profile_user['first_name'] ?>
                                    </p>
                                </div>

                                <div>
                                    <p class="mb-2 text-xs font-bold uppercase tracking-wider text-gray-400 dark:text-gray-500">
                                        Last Name
                                    </p>
                                    <p class="text-base font-semibold text-gray-900 dark:text-white">
                                        <?= $profile_user['last_name'] ?>
                                    </p>
                                </div>

                                <div>
                                    <p class="mb-2 text-xs font-bold uppercase tracking-wider text-gray-400 dark:text-gray-500">
                                        Email address
                                    </p>
                                    <p class="text-base font-semibold text-gray-900 dark:text-white">
                                        <?= $profile_user['email'] ?>
                                    </p>
                                </div>

                                <div>
                                    <p class="mb-2 text-xs font-bold uppercase tracking-wider text-gray-400 dark:text-gray-500">
                                        Phone
                                    </p>
                                    <p class="text-base font-semibold text-gray-900 dark:text-white">
                                        <?= $profile_user['phone_number'] ?>
                                    </p>
                                </div>

                                <div class="col-span-1 lg:col-span-2">
                                    <p class="mb-2 text-xs font-bold uppercase tracking-wider text-gray-400 dark:text-gray-500">
                                        Bio
                                    </p>
                                    <p class="text-base font-medium text-gray-600 dark:text-gray-300 leading-relaxed">
                                        <?= $profile_user['biography'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <button id="edit_user" class="flex items-center justify-center gap-2 rounded-lg bg-gray-900 px-6 py-3 text-sm font-bold text-white hover:bg-black transition-all transform hover:-translate-y-0.5 lg:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 min-w-[140px]">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0911 2.78206C14.2125 1.90338 12.7878 1.90338 11.9092 2.78206L4.57524 10.116C4.26682 10.4244 4.0547 10.8158 3.96468 11.2426L3.31231 14.3352C3.25997 14.5833 3.33653 14.841 3.51583 15.0203C3.69512 15.1996 3.95286 15.2761 4.20096 15.2238L7.29355 14.5714C7.72031 14.4814 8.11172 14.2693 8.42013 13.9609L15.7541 6.62695C16.6327 5.74827 16.6327 4.32365 15.7541 3.44497L15.0911 2.78206ZM12.9698 3.84272C13.2627 3.54982 13.7376 3.54982 14.0305 3.84272L14.6934 4.50563C14.9863 4.79852 14.9863 5.2734 14.6934 5.56629L14.044 6.21573L12.3204 4.49215L12.9698 3.84272ZM11.2597 5.55281L5.6359 11.1766C5.53309 11.2794 5.46238 11.4099 5.43238 11.5522L5.01758 13.5185L6.98394 13.1037C7.1262 13.0737 7.25666 13.003 7.35947 12.9002L12.9833 7.27639L11.2597 5.55281Z" fill=""></path>
                            </svg>
                            Edit Profile
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center users-modal <?= $active_tab !== 'users' ? 'hidden' : '' ?>">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                    <?php
                    $cpt = 0;
                    if ($all_users != []) {
                        foreach ($all_users as $user) {
                            $uniqueDropdownId = "dropdown-" . $cpt;
                            $uniqueDropdownButtonId = "dropdownButton-" . $cpt; ?>
                            <div class="relative bg-white dark:bg-gray-800 w-full p-8 border border-gray-100 dark:border-gray-700 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col items-center">
                                <button id="<?= $uniqueDropdownButtonId ?>" data-dropdown-toggle="dropdown" class="absolute top-4 right-4 text-gray-400 hover:text-gray-900 bg-transparent rounded-full p-2 hover:bg-gray-100 focus:outline-none transition-colors dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="3" d="M6 12h.01m6 0h.01m5.99 0h.01" />
                                    </svg>
                                </button>
                                <div id="<?= $uniqueDropdownId ?>" class="absolute top-14 right-4 z-20 bg-white border border-gray-100 rounded-lg shadow-xl w-36 hidden overflow-hidden dark:bg-gray-700 dark:border-gray-600">
                                    <ul class="text-sm font-medium" aria-labelledby="dropdownButton">
                                        <li>
                                            <a href="#"
                                                class="delete-user block w-full px-4 py-3 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 text-left transition-colors"
                                                user-id="<?= $user['id'] ?>">
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <img class="w-24 h-24 mb-4 rounded-full border-4 border-gray-50 dark:border-gray-700 shadow-sm" src="/img/user.png" alt="User image" />
                                <h5 class="mb-1 text-xl font-bold text-gray-900 dark:text-white"><?= $user['first_name'] . ' ' . $user['last_name'] ?></h5>
                                <div class="flex flex-col gap-1 items-center mb-4">
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400"><?= $user['email'] ?></span>
                                    <span class="text-xs text-gray-400 dark:text-gray-500"><?= $user['phone_number'] ?></span>
                                </div>
                                <span class="text-sm text-gray-600 dark:text-gray-300 text-center italic leading-relaxed">"<?= $user['biography'] ?>"</span>
                            </div>
                    <?php
                            $cpt++;
                        }
                    } else {
                        echo '<h1 class="col-span-full text-center text-gray-500 py-12">There\'s no user yet in your website</h1>';
                    }
                    ?>
                    <form id="deleteUserForm" method="POST" action="">
                        <input type="hidden" name="delete_user_id" id="delete_user_id">
                    </form>
                </div>
            </div>

            <div class="flex justify-center contact-modal <?= $active_tab !== 'contacts' ? 'hidden' : '' ?>">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                    <?php
                    $cpt = 0;
                    if (!empty($all_contacts)) {
                        foreach ($all_contacts as $contact) {
                            $uniqueContactDropdownId = "dropdownContact-" . $cpt;
                            $uniqueContactDropdownButtonId = "dropdownButtonContact-" . $cpt;
                    ?>
                            <div class="relative bg-white dark:bg-gray-800 block w-full p-8 border border-gray-100 dark:border-gray-700 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                                <div class="flex flex-col gap-4">
                                    <div class="flex flex-row justify-between items-start">
                                        <h5 class="text-xl font-bold text-gray-900 dark:text-white"><?= $contact['name'] ?></h5>
                                        <div class="relative">
                                            <button id="<?= $uniqueContactDropdownButtonId ?>" data-dropdown-toggle="dropdown" class="text-gray-400 hover:text-gray-900 bg-transparent rounded-full p-2 hover:bg-gray-100 focus:outline-none transition-colors dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                                <span class="sr-only">Open dropdown</span>
                                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="3" d="M6 12h.01m6 0h.01m5.99 0h.01" />
                                                </svg>
                                            </button>
                                            <div id="<?= $uniqueContactDropdownId ?>" class="absolute top-10 right-0 z-20 bg-white border border-gray-100 rounded-lg shadow-xl w-36 hidden overflow-hidden dark:bg-gray-700 dark:border-gray-600">
                                                <ul class="text-sm font-medium" aria-labelledby="dropdownButton">
                                                    <li>
                                                        <a href="#"
                                                            class="delete-contact block w-full px-4 py-3 text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 text-left transition-colors"
                                                            contact-id="<?= $contact['id'] ?>">
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-semibold text-blue-600 dark:text-blue-400 mb-1"><?= $contact['email'] ?></h5>
                                        <h5 class="text-xs font-medium text-gray-400 uppercase tracking-wide"><?= $contact['date_msg'] ?></h5>
                                    </div>
                                    <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed"><?= $contact['descrip'] ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $cpt++;
                        }
                    } else {
                        echo '<div class="col-span-full text-center text-gray-500 py-12">There\'s No Contacts to the plateform yet</div>';
                    }
                    ?>
                    <form id="deleteContactForm" method="POST" action="">
                        <input type="hidden" name="delete_contact_id" id="delete_contact_id">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    let editModal = document.querySelector("#editModal");
    let editUser = document.querySelector("#edit_user");
    let cancelEdit = document.querySelector("#cancel_edit");
    let closeEdit = document.querySelector("#close_edit");

    let profile_modal = document.querySelector(".profile-modal");
    let users_modal = document.querySelector(".users-modal");
    let contact_modal = document.querySelector(".contact-modal");

    let profile_header = document.querySelector(".profile-header");
    let users_header = document.querySelector(".users-header");
    let contact_header = document.querySelector(".contact-header");

    for (let i = 0; i < <?= $cpt ?>; i++) {

        let dropdown = document.querySelector("#dropdown-" + i);
        let dropdownButton = document.querySelector("#dropdownButton-" + i);
        if (dropdownButton) {
            dropdownButton.addEventListener('click', () => {
                dropdown.classList.toggle('hidden');
            });
        }

    }

    for (let i = 0; i < <?= $cpt ?>; i++) {

        let dropdownContact = document.querySelector("#dropdownContact-" + i);
        let dropdownContactButton = document.querySelector("#dropdownButtonContact-" + i);
        if (dropdownContactButton) {
            dropdownContactButton.addEventListener('click', () => {
                dropdownContact.classList.toggle('hidden');
            });
        }

    }

    function show_delete_user_Modal() {
        deleteUserModal.classList.remove('hidden');
    }

    function close_delete_user_Modal() {
        deleteUserModal.classList.add('hidden');
    }

    function show_delete_Contact_Modal() {
        deleteContactModal.classList.remove('hidden');
    }

    function close_delete_Centact_Modal() {
        deleteContactModal.classList.add('hidden');
    }

    let deleteUserModal = document.querySelector("#deleteUserModal");
    let close_deleteUserModal = document.querySelector("#close_deleteUserModal");
    let cancel_deleteUserModal = document.querySelector("#cancel_deleteUserModal");
    let submit_deleteUserModal = document.querySelector("#submit_deleteUserModal");

    let deleteContactModal = document.querySelector("#deleteContactModal");
    let close_deleteContactModal = document.querySelector("#close_deleteContactModal");
    let cancel_deleteContactModal = document.querySelector("#cancel_deleteContactModal");
    let submit_deleteContactModal = document.querySelector("#submit_deleteContactModal");

    close_deleteUserModal.addEventListener('click', close_delete_user_Modal);
    cancel_deleteUserModal.addEventListener('click', close_delete_user_Modal);
    close_deleteContactModal.addEventListener('click', close_delete_Centact_Modal);
    cancel_deleteContactModal.addEventListener('click', close_delete_Centact_Modal);

    let delete_user_input = document.querySelector('#delete_user_id');

    let delete_user = document.querySelectorAll('.delete-user').forEach((elem) => {
        elem.addEventListener('click', () => {
            show_delete_user_Modal();
            delete_user_input.value = elem.getAttribute('user-id');
            submit_deleteUserModal.addEventListener('click', () => {
                document.querySelector("#deleteUserForm").submit();
            })
        })
    });

    let delete_contact_input = document.querySelector('#delete_contact_id');

    let delete_user_contact = document.querySelectorAll('.delete-contact').forEach((elem) => {
        elem.addEventListener('click', () => {
            show_delete_Contact_Modal();
            delete_contact_input.value = elem.getAttribute('contact-id');
            submit_deleteContactModal.addEventListener('click', () => {
                document.querySelector('#deleteContactForm').submit();
            })
        })
    })


    function show_profile_model() {
        profile_modal.classList.remove('hidden');
    }

    function close_profile_model() {
        profile_modal.classList.add('hidden');
    }

    function show_users_model() {
        users_modal.classList.remove('hidden');
    }

    function close_users_model() {
        users_modal.classList.add('hidden');
    }

    function show_contact_model() {
        contact_modal.classList.remove('hidden');
    }

    function close_contact_model() {
        contact_modal.classList.add('hidden');
    }

    function openModal() {
        editModal.classList.remove('hidden');
    }

    function closeModal() {
        editModal.classList.add('hidden');
    }

    editUser.addEventListener('click', openModal);
    cancelEdit.addEventListener('click', closeModal);
    closeEdit.addEventListener('click', closeModal);


    profile_header.addEventListener('click', () => {
        profile_header.classList.remove('opacity-40');
        users_header.classList.add('opacity-40');
        contact_header.classList.add('opacity-40');
        show_profile_model();
        close_users_model();
        close_contact_model();
    });

    users_header.addEventListener('click', () => {
        profile_header.classList.add('opacity-40');
        users_header.classList.remove('opacity-40');
        contact_header.classList.add('opacity-40');
        close_profile_model();
        show_users_model();
        close_contact_model();
    });

    contact_header.addEventListener('click', () => {
        profile_header.classList.add('opacity-40');
        users_header.classList.add('opacity-40');
        contact_header.classList.remove('opacity-40');
        close_profile_model();
        close_users_model();
        show_contact_model();
    });
</script>