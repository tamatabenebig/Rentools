<header class="bg-yellow-500 text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
</svg>
      <span class="ml-3 text-xl">Rentools</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="/">Accueil</a>
      <a class="mr-5 hover:text-gray-900"href="categorie">Categorie</a>
      <a class="mr-5 hover:text-gray-900"href="/contact">Contact</a>
      <a class="mr-5 hover:text-gray-900"href="{{ route('posts.create') }}">Post</a>
      <a class="mr-5 hover:text-gray-900"href="{{ route('file.upload') }}">image</a>
      <a class="mr-5 hover:text-gray-900"href="{{ route('rentals') }}">Inscription</a>
    </nav>
    <a href="connexion">
    <button class="inline-flex items-center bg-blue-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">connexion
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
      </svg>
    </button>
    </a>
  </div>
</header>

<!-- <ul>
    <li><a href="/">l'accueil</a></li>
    <li><a href="/article">Article</a></li>
    <li><a href="/contact">Contact</a></li>
</ul> -->