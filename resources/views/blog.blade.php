<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>

<body>
    <x-navbar/>
    <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-red-600 rounded-full">{{session('msg')}}</span> 
            <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-green-600 rounded-full">{{session('mssg')}}</span> 
   
        @foreach ($blogPosts as $post )
        <section class="p-5 text-indigo-200 bg-gray-200 body-font">
         <Link to="coursedet">
        
        <div class="flex flex-col items-center px-5 mx-auto bg-gray-200 md:flex-row jobcard">
          {{-- <div class="flex flex-col items-center mb-16 lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0">
            
            <figure class="visible">
          
                            <div class="">
                              
                                <div class="px-2 pt-10 sm:px-6">
                                <span class="inline-block px-2 py-1 mb-2 text-xs font-bold tracking-widest text-white bg-green-600 rounded-full">Featured Courses</span>
                                <h1 class="mb-4 text-3xl font-medium text-gray-100 title-font sm:text-4xl">{{$post->heading}}
                                    <br class="hidden lg:inline-block" />
                                </h1>
                                    <p class="pb-6 text-base text-indigo-200">{{$post->description}}</p>
                                    <p class="pb-8 text-base text-indigo-200">{{$post->content}}</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center pb-12">
                                            <div class="w-12 h-12">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/testimonials/t_1.png" alt class="object-cover w-full h-full overflow-hidden rounded-full" />
                                            </div>
                                            <p class="ml-3 font-bold text-indigo-200">
                                                Kishor <br />
                                                <span class="text-base font-light text-indigo-200"> {{$post->date}}</</span>
                                                <a href="editPost/{{$post->id}}" class="inline-block px-2 py-1 mb-2 text-xs font-bold tracking-widest text-white bg-green-600 rounded-full">Edit</a>
                                                <a href="deletePost/{{$post->id}}" class="inline-block px-2 py-1 mb-2 text-xs font-bold tracking-widest text-white bg-red-600 rounded-full">Delete</a>

                                            </p>
                                        </div>
                              
                                    </div>
                                </div>
                            </div>
                        </figure>
        
          </div>
          <div class="hidden w-5/6 lg:max-w-lg lg:w-full md:w-1/2 sm:block">
            <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600" />
          </div> --}}

          <!--STAERT-->
          <div>
     <section class="text-gray-600 body-font">
  <div class="container flex flex-col px-5 py-24 mx-auto">
    <div class="mx-auto lg:w-4/6">
      <div class="overflow-hidden rounded-lg h-74">
        <img alt="content" class="object-cover object-center w-full h-84" src="{{$post->image}}">
         <h2 class="mt-4 text-2xl text-justify text-gray-900 title-font">{{$post->heading}}</h2>
      </div>
      <div class="flex flex-col mt-10 sm:flex-row">
        <div class="text-center sm:w-1/3 sm:pr-8 sm:py-8">
          <div class="inline-flex items-center justify-center w-20 h-20 text-gray-400 bg-gray-200 rounded-full">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center justify-center text-center">
            <h2 class="mt-4 text-lg font-medium text-gray-500 title-font">{{$post->author}}</h2>
            <div class="w-12 h-1 mt-2 mb-4 bg-blue-500 rounded"></div>
            {{-- <h2 class="mt-4 text-lg font-medium text-gray-500 title-font">Catogery:{{$post->catogry}}</h2> --}}
             <p class="text-base">{{$post->date}}.</p> 
          </div>
        </div>
        <div class="pt-4 mt-4 text-center border-t border-black sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l sm:border-t-0 sm:mt-0 sm:text-left">
          <span class="inline-block px-2 py-1 text-xs font-medium tracking-widest text-gray-700 rounded bg-gray-50">{{$post->catogry}} </span>
        
          <p class="mb-4 text-lg leading-relaxed text-justify text-gray-900">{{$post->description}}.</p>
          {{-- <a href="viewcontent/{{$post->id}}" class="inline-flex items-center text-blue-500 ">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a> --}}
          <div class="flex flex-wrap items-center w-full pb-4 mt-auto mb-4 border-b-2 border-gray-100">
          <a href="viewcontent/{{$post->id}}" class="inline-flex items-center text-blue-800">Read More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <span class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-400 border-r-2 border-gray-200">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>1.2K
          </span>
          {{-- <span class="inline-flex items-center text-sm leading-none text-gray-400">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
            </svg>6
          </span> --}}
        </div>

          <a href="editPost/{{$post->id}}" class="inline-block px-2 py-1 mb-2 text-xs font-bold tracking-widest text-white bg-green-600 rounded-full">Edit</a>
          <a href="deletePost/{{$post->id}}" class="inline-block px-2 py-1 mb-2 text-xs font-bold tracking-widest text-white bg-red-600 rounded-full">Delete</a>

        </div>
      </div>
    </div>
  </div>
</section>

</div>
          <!--END-->
        </div>
        
      </section>
    @endforeach
    
    {{-- @foreach ($blogPosts as $post )
            <div class="w-full max-w-md lg:flex">
        <div class="flex-none h-48 overflow-hidden text-center bg-cover rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal bg-white border-b border-l border-r rounded-b border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light lg:rounded-b-none lg:rounded-r">
            <div class="mb-8">
            <p class="flex items-center text-sm text-grey-dark">
                <svg class="w-3 h-3 mr-2 text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                </svg>
                Featured
            </p>
            <div class="mb-2 text-xl font-bold text-black">{{$post->heading}}</div>
            <h3>{{$post->description}}</h3>
            <p class="text-base text-grey-darker">{{$post->content}}</p>
            </div>
            <div class="flex items-center">
            <img class="w-10 h-10 mr-4 rounded-full" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
                <p class="leading-none text-black">Jonathan Reinink</p>
                <p class="text-grey-dark">Aug 18</p>
            </div>
            </div>
        </div>
        </div> 
    @endforeach --}}
    
</body>

</html>