<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <x-navbar/>
    
    @foreach ($post as $viewlarge )
     <div>
    <div class="container flex flex-col px-5 py-24 mx-auto">
    <div class="mx-auto lg:w-4/6">
    <section class="text-gray-600 body-font">
         <div class="overflow-hidden rounded-lg h-74">
        <img alt="content" class="object-cover object-center w-full h-84" src="{{$viewlarge->image}}">
      </div>
      
  <div class="container px-5 py-24 mx-auto">
    <div class="w-full mx-auto text-center xl:w-full lg:w-full">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 mb-8 text-gray-400" viewBox="0 0 975.036 975.036">
        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
      </svg>
      <p class="text-2xl leading-relaxed text-justify">{{$viewlarge->heading}}</p>
      
      {{-- <p class="text-lg leading-relaxed">{{$viewlarge->description}}</p>  --}}

      {{-- <div class="flex flex-col mt-10 sm:flex-row">
        <div class="text-center sm:w-1/3 sm:pr-8 sm:py-8">
          <div class="inline-flex items-center justify-center w-20 h-20 text-gray-400 bg-gray-200 rounded-full">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center justify-center text-center">
            <h2 class="mt-4 text-lg font-medium text-gray-500 title-font">{{$viewlarge->author}}</h2>
            <div class="w-12 h-1 mt-2 mb-4 bg-blue-500 rounded"></div>
            <p class="text-base">{{$viewlarge->date}}.</p>
          </div>
        </div>
        <div class="pt-4 mt-4 text-center border-t border-black sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l sm:border-t-0 sm:mt-0 sm:text-left">
          <p class="mb-4 text-lg leading-relaxed text-gray-900">{{$viewlarge->description}}.</p>
          <h2 class="mt-4 text-lg font-medium text-gray-500 title-font">Catogery:{{$viewlarge->catogry}}</h2>
        </div>
      </div> --}}

      <div class="flex flex-wrap -m-4">
      <div class="w-full p-4 md:w-2/2">
        
        <div class="h-full p-8 bg-gray-100 rounded">
            <span class="inline-block px-2 py-1 text-xs font-medium tracking-widest text-gray-700 rounded bg-gray-50">{{$viewlarge->catogry}} </span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 mb-4 text-gray-400" viewBox="0 0 975.036 975.036">
            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
            
        </svg>
            
          <p class="mb-6 leading-relaxed text-justify">&nbsp; &nbsp; &nbsp; &nbsp; {{$viewlarge->content}}</p>
          <p class="text-2xl leading-relaxed text-justify">{{$viewlarge->parahead2}}</p>
          <p class="mb-6 leading-relaxed text-justify">&nbsp; &nbsp; &nbsp; &nbsp;{{$viewlarge->paracontent2}}</p>
          <p class="text-2xl leading-relaxed text-justify">{{$viewlarge->parahead3}}</p>
          <p class="mb-6 leading-relaxed text-justify">&nbsp; &nbsp; &nbsp; &nbsp;{{$viewlarge->paracontent3}}</p>
          <p class="text-2xl leading-relaxed text-justify">{{$viewlarge->parahead4}}</p>
          <p class="mb-6 leading-relaxed text-justify">&nbsp; &nbsp; &nbsp; &nbsp;{{$viewlarge->paracontent4}}</p>
          <p class="text-2xl leading-relaxed text-justify">{{$viewlarge->parahead5}}</p>
          <p class="mb-6 leading-relaxed text-justify">&nbsp; &nbsp; &nbsp; &nbsp;{{$viewlarge->paracontent5}}</p>
          <p class="text-2xl leading-relaxed text-justify">{{$viewlarge->parahead6}}</p>
          <p class="mb-6 leading-relaxed text-justify">&nbsp; &nbsp; &nbsp; &nbsp;{{$viewlarge->paracontent6}}</p>
          <p class="text-2xl leading-relaxed text-justify">{{$viewlarge->parahead7}}</p>
          <p class="mb-6 leading-relaxed text-justify">&nbsp; &nbsp; &nbsp; &nbsp;{{$viewlarge->paracontent7}}</p>
          <p class="text-2xl leading-relaxed text-justify">{{$viewlarge->parahead8}}</p>
          <p class="mb-6 leading-relaxed text-justify">&nbsp; &nbsp; &nbsp; &nbsp;{{$viewlarge->paracontent8}}</p>
          <a class="inline-flex items-center">
            <img alt="testimonial" src="https://dummyimage.com/106x106" class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full">
            <span class="flex flex-col flex-grow pl-4">
              <span class="font-medium text-gray-900 title-font">{{$viewlarge->author}}</span>
              <span class="text-sm text-gray-500">{{$viewlarge->date}}</span>
            </span>
          </a>
        </div>
      </div>

      
    </div>
  </div>
</section>
    </div>
    </div>
</div> 

{{-- <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -my-8">
      <div class="px-4 py-8 lg:w-1/3">
        <div class="flex items-start h-full">
          <div class="flex flex-col flex-shrink-0 w-12 leading-none text-center">
            <span class="pb-2 mb-2 text-gray-500 border-b-2 border-gray-200">Jul</span>
            <span class="text-lg font-medium leading-none text-gray-800 title-font">18</span>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="mb-1 text-xs font-medium tracking-widest text-red-500 title-font">CATEGORY</h2>
            <h1 class="mb-3 text-xl font-medium text-gray-900 title-font">The 400 Blows</h1>
            
          </div>
        </div>
      </div>
    </section> --}}
        
    @endforeach
</body>
</html>