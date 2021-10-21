<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
 @include('partials.navbar')
 <section class="bg-gray-200 text-gray-600 body-font">

<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Inscription</h1>
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="fullname"
                        placeholder="Nom Prenom" />

                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email" />

                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Mot de Passe" />
                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password"
                        placeholder="Confirmer Mot de passe" />

                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded bg-green-400 text-white hover:bg-green-500 focus:outline-none my-1"
                    >Créer un Compte</button>

                    <div class="text-center text-sm text-grey-dark mt-4">
                        En signant, vous accepter les 
                        <a class="no-underline border-b border-grey-dark text-grey-dark hover:text-blue-500" href="#">
                            Termes d'utilsation
                        </a> et 
                        <a class="no-underline border-b border-grey-dark text-grey-dark hover:text-blue-500" href="#">
                            la politique de confidentialité
                        </a>
                    </div>
                </div>

                <div class="text-grey-dark mt-6">
                    Déja inscrit ?  
                    <a class="no-underline border-b border-blue text-blue hover:text-blue-500" href="connexion">
                        Connexion
                    </a>.
                </div>
            </div>
        </div>
</section>
  @include('partials.footer')
</section>