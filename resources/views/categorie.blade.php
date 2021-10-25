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
 <!-- <section class="bg-gray-200 text-gray-600 body-font"> -->
  @section('content')

    <h1>liste des articles</h1>

    @if ($posts->count() > 100)
    
    @foreach($posts as $post)
    
    <h3>{{ $post->title }}</h3>
    
    @endforeach
@else
<span>Aucune nouvelle annonces</span>
@endif
   
 <section class="text-gray-600 body-f  ont overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">Titre</span>
          <span class="mt-1 text-gray-500 text-sm">Date</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Description</h2>
          <p class="leading-relaxed">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti esse quibusdam quae commodi? Voluptatum perspiciatis totam ut amet illum error?</p>
          <a class="text-indigo-500 inline-flex items-center mt-4">Plus d'info
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">Titre</span>
          <span class="mt-1 text-gray-500 text-sm">Date</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Description</h2>
          <p class="leading-relaxed">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti esse quibusdam quae commodi? Voluptatum perspiciatis totam ut amet illum error?</p>
          <a class="text-indigo-500 inline-flex items-center mt-4">Plus d'info
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">Titre</span>
          <span class="text-sm text-gray-500">Date</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Description</h2>
          <p class="leading-relaxed">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti esse quibusdam quae commodi? Voluptatum perspiciatis totam ut amet illum error?</p>
          <a class="text-indigo-500 inline-flex items-center mt-4">Plus d'info
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>


  @include('partials.footer')
