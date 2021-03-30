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
                            <label class="text-xl text-gray-600">Image <span class="text-red-500">*</span></label></br>
                            <input type="text" name='image' value="{{$post->image}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="title" id="title" value="" required>
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading <span class="text-red-500">*</span></label></br>
                            <input type="text" name='heading' value="{{$post->heading}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="title" id="title" value="" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Description</label></br>
                            <input type="text" name="description" value="{{$post->description}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="description" id="description" placeholder="(Optional)">
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea name="content" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->content}}
                            </textarea>
                        </div>

                        
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Date</label></br>
                            <input type="text" name="date" value="{{$post->date}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="description" id="description" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Author</label></br>
                            <input type="text" name="author" value="{{$post->author}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="description" id="description" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Catogory</label></br>
                            <input type="text" name="catogry" value="{{$post->catogry}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="description" id="description" placeholder="(Optional)">
                        </div>

                        
                        <!--para & content-->
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading 2</label></br>
                            <input type="text" name="parahead2" id="parahead2" value="{{$post->parahead2}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none"  placeholder="(Optional)">
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 2 <span class="text-red-500">*</span></label></br>
                            <textarea name="paracontent2" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->paracontent2}}
                            </textarea>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading 3</label></br>
                            <input type="text" name="parahead3" id="parahead3" value="{{$post->parahead3}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none"  placeholder="(Optional)">
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 3 <span class="text-red-500">*</span></label></br>
                            <textarea name="paracontent3" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->paracontent3}}
                            </textarea>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading 4</label></br>
                            <input type="text" name="parahead4" id="parahead4" value="{{$post->parahead4}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none"  placeholder="(Optional)">
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 4 <span class="text-red-500">*</span></label></br>
                            <textarea name="paracontent4" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->paracontent4}}
                            </textarea>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading 5</label></br>
                            <input type="text" name="parahead5" id="parahead5" value="{{$post->parahead5}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none"  placeholder="(Optional)">
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 5 <span class="text-red-500">*</span></label></br>
                            <textarea name="paracontent5" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->paracontent5}}
                            </textarea>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading 6</label></br>
                            <input type="text" name="parahead6" id="parahead6" value="{{$post->parahead6}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none"  placeholder="(Optional)">
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 6 <span class="text-red-500">*</span></label></br>
                            <textarea name="paracontent6" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->paracontent6}}
                            </textarea>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading 7</label></br>
                            <input type="text" name="parahead7" id="parahead7" value="{{$post->parahead7}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none"  placeholder="(Optional)">
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 7 <span class="text-red-500">*</span></label></br>
                            <textarea name="paracontent7" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->paracontent7}}
                            </textarea>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading 8</label></br>
                            <input type="text" name="parahead8" id="parahead8" value="{{$post->parahead8}}" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none"  placeholder="(Optional)">
                        </div>
                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 8 <span class="text-red-500">*</span></label></br>
                            <textarea name="paracontent8" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            {{$post->paracontent8}}
                            </textarea>
                        </div>
                        <!--para & content end-->



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