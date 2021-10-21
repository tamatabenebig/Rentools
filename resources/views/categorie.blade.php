<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
 @include('partials.navbar')
 <section class="bg-gray-200 text-gray-600 body-font">
  
 <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Rentools</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum molestiae architecto in, aperiam fugiat ullam? Neque nobis nostrum laborum. asperiores, praesentium .</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="image/bricolage.jpg" alt="content">
          <!-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Outil de Bricolage</h3> -->
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Outil de Bricolage</h2>
          <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum molestiae architecto in, aperiam fugiat ullam? Neque nobis nostrum laborum. asperiores, praesentium .</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="image/mecanique_2.jpg" alt="content">
          <!-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3> -->
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Outil de Mecanique</h2>
          <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum molestiae architecto in, aperiam fugiat ullam? Neque nobis nostrum laborum. asperiores, praesentium .</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="image/nettoyage_2.jpg" alt="content">
          <!-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3> -->
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Matériel de Nettoyage</h2>
          <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum molestiae architecto in, aperiam fugiat ullam? Neque nobis nostrum laborum. asperiores, praesentium .</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="bg-gray-100 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="image/chantier_2.jpg" alt="content">
          <!-- <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3> -->
          <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Materiel de chantier</h2>
          <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum molestiae architecto in, aperiam fugiat ullam? Neque nobis nostrum laborum. asperiores, praesentium .</p>
        </div>
      </div>
    </div>
  </div>

  @include('partials.footer')
</section>