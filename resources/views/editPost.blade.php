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
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                       
                       
                    <form method="post" action="../updatePost/{{$post->id}}">
                         @csrf 
                        
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" name='heading' value="{{$post->heading}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="title" id="title" value="" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Description</label></br>
                            <input type="text" name="description" value="{{$post->description}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="description" id="description" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Date</label></br>
                            <input type="text" name="date" value="{{$post->date}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="description" id="description" placeholder="(Optional)">
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea name="content" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->content}}
                            </textarea>
                            
                        </div>

                        <div class="flex p-1">
                            
                            <button type="submit" class="p-3 text-white bg-blue-500 btn btn-success hover:bg-blue-400" required>Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>