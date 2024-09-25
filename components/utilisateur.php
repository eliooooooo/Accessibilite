<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Espace utilisateur - Inscription | Voyage en France</title>
</head>

<body class="bg-gray-100">
    <h1 class="text-2xl text-center font-bold mt-5 mb-3">Formulaire d'inscription</h1>
    <p class="text-center text-gray-500 mb-5">Veuillez remplir le formulaire ci-dessous pour vous inscrire.</p>
    <form class="max-w-lg mx-auto p-5 bg-white rounded-lg shadow-lg" aria-label="Formulaire d'inscription" novalidate>
        <div class="relative z-0 w-full mb-6 group">
            <label for="floating_email" class="block text-sm font-medium text-gray-700">Adresse Email</label>
            <input type="email" name="floating_email" id="floating_email" aria-required="true" aria-invalid="false"
                class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                placeholder="Votre email" required aria-describedby="emailHelp" />
            <small id="emailHelp" aria-live="polite" class="block mt-2 text-xs text-gray-500">Votre adresse email ne sera jamais
                partagée.</small>
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <label for="floating_password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <input type="password" name="floating_password" id="floating_password" aria-required="true"
                aria-invalid="false"
                class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                placeholder="Votre mot de passe" required />
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <label for="floating_repeat_password" class="block text-sm font-medium text-gray-700">Confirmer le mot de
                passe</label>
            <input type="password" name="repeat_password" id="floating_repeat_password" aria-required="true"
                aria-invalid="false"
                class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                placeholder="Confirmez votre mot de passe" required />
        </div>

        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2">
            <div class="relative z-0 w-full mb-6 group">
                <label for="floating_first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
                <input type="text" name="floating_first_name" id="floating_first_name" aria-required="true"
                    aria-invalid="false"
                    class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Votre prénom" required />
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <label for="floating_last_name" class="block text-sm font-medium text-gray-700">Nom de famille</label>
                <input type="text" name="floating_last_name" id="floating_last_name" aria-required="true"
                    aria-invalid="false"
                    class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    placeholder="Votre nom" required />
            </div>
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <label for="floating_phone" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
            <input type="tel" pattern="[0-9]{10}" name="floating_phone" id="floating_phone" aria-required="true"
                aria-invalid="false"
                class="block w-full px-4 py-2 mt-1 text-base text-gray-900 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                placeholder="Votre numéro de téléphone" required />
            <small id="phoneHelp" aria-live="polite" class="block mt-2 text-xs text-gray-500">Format: 0123456789</small>
        </div>

        <button type="submit" aria-label="Soumettre le formulaire d'inscription"
            class="w-full px-4 py-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto sm:px-8 sm:py-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Envoyer le formulaire d'inscription
        </button>
    </form>
</body>

</html>