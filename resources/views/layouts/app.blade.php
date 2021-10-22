<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('partials.navbar')
<section class="bg-gray-200 text-gray-600 body-font">
  <div class="container px-5 py-10 mb-20 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo nulla molestias autem. Deleniti inventore impedit </p>
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Dernière annonce ajoutée</h1>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 sm:w-1/2 p-4">
      <a href="rentals">
        <div class="transition delay-150 duration-300 ease-in-out flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center" src="image/annonce_1.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Categorie</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Titre</h1>
            <p class="leading-relaxed">Description Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, dolores!.</p>
          </div>
        </div>
        </a>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center" src="image/annonce_7.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Categorie</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Titre</h1>
            <p class="leading-relaxed">Description Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, dolores!.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full objetct-fit object-center" src="image/perceuse.jpeg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Categorie</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Titre</h1>
            <p class="leading-relaxed">Description Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, dolores!.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center" src="image/annonce_4.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Categorie</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Titre</h1>
            <p class="leading-relaxed">Description Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, dolores!.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center" src="image/annonce_5.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Categorie</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Titre</h1>
            <p class="leading-relaxed">Description Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, dolores!.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-fit object-center" src="image/annonce_6.jpg">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Categorie</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Titre</h1>
            <p class="leading-relaxed">Description Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae, dolores!.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <h2 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Location entre particulier</h2>
    <div>
    
    <div class="flex flex-wrap -m-4">
    <a href="categorie">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="image/bricolage.jpg" alt="content">
          <!-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3> -->
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">outil de bricolage</h2>
          <!-- <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p> -->
        </div>
        </a>
      </div>
      <a href="categorie">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="image/mecanique_2.jpg" alt="content">
          <!-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3> -->
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">materiel de mecanique</h2>
          <!-- <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p> -->
        </div>
        </a>
      </div>
      <a href="categorie">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="image/nettoyage_2.jpg" alt="content">
          <!-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3> -->
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">materiel de netoyage</h2>
          <!-- <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p> -->
        </div>
        </a>
      </div>
      <a href="categorie">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="image/chantier_2.jpg" alt="content">
          <!-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3> -->
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">materiel de chantiers</h2>
          <!-- <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p> -->
        </div>
        </a>
        </div>
    </div>
  </div>
  </div>
</section>
</body>
  @include('partials.footer')