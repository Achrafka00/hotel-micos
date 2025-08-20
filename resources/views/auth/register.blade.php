<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micos Hotel - Inscription</title>
    <link rel="shortcut icon" type="x-icon" href="images/hotel.jpg"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <style>
        .zoom-img {
            width: 60%; 
            transition: transform 0.3s ease;
            margin: 0 auto;
        }

        .image-container:hover .zoom-img {
            transform: scale(1.1); 
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Logo avec effet de zoom -->
         <div class="image-container">
                <img  style="border-radius:10px " class="zoom-img" src="images/32.png" alt="Logo">
            </div>

            <!-- Formulaire d'inscription -->
            <div>
                <h2 class="text-center text-3xl font-extrabold text-gray-900">
                    Créez un nouveau compte
                </h2>
                <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                        <input id="name" type="text" name="name" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" type="email" name="email" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="username">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                        <input id="phone" type="text" name="phone" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="tel">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <input id="password" type="password" name="password" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="new-password">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="new-password">
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900">Déjà enregistré ? Connectez-vous ici.</a>
                        <button type="submit" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            S'inscrire
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
