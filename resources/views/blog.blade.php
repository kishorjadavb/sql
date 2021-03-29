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
        <section class="p-5 text-indigo-200 bg-gray-900 body-font">
         <Link to="coursedet">
        
        <div class="flex flex-col items-center px-5 mx-auto md:flex-row jobcard">
          <div class="flex flex-col items-center mb-16 lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0">
            
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
          </div>
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