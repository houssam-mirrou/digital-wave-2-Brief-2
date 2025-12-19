<div id="editModal" class="<?= ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors)) ? '' : 'hidden' ?> fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50 backdrop-blur-sm">
    <div class="relative w-full max-w-2xl px-4 h-auto">
        <div class="bg-white rounded-xl shadow-2xl dark:bg-gray-800 border border-gray-200 dark:border-gray-700">

            <div class="flex justify-between items-center p-6 border-b dark:border-gray-700">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Edit Profile</h3>
                <button id="close_edit" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <form action="" method="POST" class="p-6 space-y-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" name="first_name" id="first_name" value="<?= $form_inputs['first_name'] ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                        <?php if (isset($errors['first_name'])): ?>
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['first_name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" name="last_name" id="last_name" value="<?= $form_inputs['last_name'] ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                        <?php if (isset($errors['last_name'])): ?>
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['last_name'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" value="<?= $form_inputs['email'] ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
                        <?php if (isset($errors['email'])): ?>
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['email'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <input type="text" name="phone" id="phone" value="<?= $form_inputs['phone_number'] ?>"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        <?php if (isset($errors['phone'])): ?>
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['phone'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <label for="biography" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Biography</label>
                    <textarea name="biography" id="biography" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"><?= $form_inputs['biography'] != null ? $form_inputs['biography'] : '' ?></textarea>
                    <?php if (isset($errors['biography'])): ?>
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><?= $errors['biography'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="flex items-center gap-4 pt-4 border-t dark:border-gray-700">
                    <button id="cancel_edit" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 w-1/2">
                        Cancel
                    </button>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-1/2">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="mx-auto max-w-(--breakpoint-2xl) p-4 pb-20 md:p-6 md:pb-6">

    <div class="rounded-2xl border border-gray-200 bg-white p-5 lg:p-6 dark:border-gray-800 dark:bg-white/[0.03]">
        <h3 class="mb-5 text-lg font-semibold text-gray-800 lg:mb-7 dark:text-white/90">
            Profile
        </h3>

        <div class="mb-6 rounded-2xl border border-gray-200 p-5 lg:p-6 dark:border-gray-800">
            <div class="flex flex-col gap-5 xl:flex-row xl:items-center xl:justify-between">
                <div class="flex w-full flex-col items-center gap-6 xl:flex-row">
                    <div class="h-20 w-20 overflow-hidden rounded-full border border-gray-200 dark:border-gray-800">
                        <img src="../../img/user.png" alt="user">
                    </div>
                    <div class="order-3 xl:order-2">
                        <h4 class="mb-2 text-center text-lg font-semibold text-gray-800 xl:text-left dark:text-white/90">
                            <?= $profile_user['first_name'] . ' ' . $profile_user['last_name'] ?>
                        </h4>
                        <div class="flex flex-col items-center gap-1 text-center xl:flex-row xl:gap-3 xl:text-left">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Been a user since : <?= $profile_user['date_inscription'] ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mb-6 rounded-2xl border border-gray-200 p-5 lg:p-6 dark:border-gray-800">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 lg:mb-6 dark:text-white/90">
                        Personal Information
                    </h4>

                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-7 2xl:gap-x-32">
                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                First Name
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                <?= $profile_user['first_name'] ?>
                            </p>
                        </div>

                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Last Name
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                <?= $profile_user['last_name'] ?>
                            </p>
                        </div>

                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Email address
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                <?= $profile_user['email'] ?>
                            </p>
                        </div>

                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Phone
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                <?= $profile_user['phone_number'] ?>
                            </p>
                        </div>

                        <div>
                            <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                                Bio
                            </p>
                            <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                                <?= $profile_user['biography'] ?>
                            </p>
                        </div>
                    </div>
                </div>

                <button id="edit_user" class="shadow-theme-xs flex w-full items-center justify-center gap-2 rounded-full border border-gray-300 bg-white px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 lg:inline-flex lg:w-auto dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0911 2.78206C14.2125 1.90338 12.7878 1.90338 11.9092 2.78206L4.57524 10.116C4.26682 10.4244 4.0547 10.8158 3.96468 11.2426L3.31231 14.3352C3.25997 14.5833 3.33653 14.841 3.51583 15.0203C3.69512 15.1996 3.95286 15.2761 4.20096 15.2238L7.29355 14.5714C7.72031 14.4814 8.11172 14.2693 8.42013 13.9609L15.7541 6.62695C16.6327 5.74827 16.6327 4.32365 15.7541 3.44497L15.0911 2.78206ZM12.9698 3.84272C13.2627 3.54982 13.7376 3.54982 14.0305 3.84272L14.6934 4.50563C14.9863 4.79852 14.9863 5.2734 14.6934 5.56629L14.044 6.21573L12.3204 4.49215L12.9698 3.84272ZM11.2597 5.55281L5.6359 11.1766C5.53309 11.2794 5.46238 11.4099 5.43238 11.5522L5.01758 13.5185L6.98394 13.1037C7.1262 13.0737 7.25666 13.003 7.35947 12.9002L12.9833 7.27639L11.2597 5.55281Z" fill=""></path>
                    </svg>
                    Edit
                </button>
            </div>
        </div>

    </div>
</div>

<script>
    let editModal = document.querySelector("#editModal");
    let editUser = document.querySelector("#edit_user");
    let cancelEdit = document.querySelector("#cancel_edit");
    let closeEdit = document.querySelector("#close_edit");
    function openModal() {
        editModal.classList.remove('hidden');
    }

    function closeModal() {
        editModal.classList.add('hidden');
    }
    editUser.addEventListener('click', openModal);
    cancelEdit.addEventListener('click', closeModal);
    closeEdit.addEventListener('click', closeModal);
</script>