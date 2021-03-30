<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    <x-navbar/>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                       <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-green-600 rounded-full">{{session('msg')}}</span> 
                       
                    <form method="POST" action="{{route('blogcontrol.postsubmit')}}">
                        @csrf
                        
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Image <span class="text-red-500">*</span></label></br>
                            <input type="text" name='image' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="title" id="title" value="" required>
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading <span class="text-red-500">*</span></label></br>
                            <input type="text" name='heading' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="title" id="title" value="" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Description</label></br>
                            <input type="text" name="description"class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="description" id="description" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Author <span class="text-red-500">*</span></label></br>
                            <input type="text" name='author' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="title" id="title" value="" required>
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Date</label></br>
                            <input type="date" name="date"class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="description" id="description" placeholder="(Optional)">
                        </div>
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Catogory <span class="text-red-500">*</span></label></br>
                            <input type="text" name='catogry' class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" name="title" id="title" value="" required>
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea name="content" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                                
                            </textarea>
                        </div>

                        <!-- heading & content-->
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading2 </label></br>
                            <input type="text" name="parahead2" id="parahead2" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" value="" >
                        </div>
                         <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 2 </label></br>
                            <textarea name="paracontent2" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            </textarea>
                        </div> 

                         <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading3 </label></br>
                            <input type="text" name="parahead3" id="parahead3" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" value="" >
                        </div>
                         <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 3 </label></br>
                            <textarea name="paracontent3" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            </textarea>
                        </div> 

                         <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading4 </label></br>
                            <input type="text" name="parahead4" id="parahead4" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" value="" >
                        </div>
                         <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 4 </label></br>
                            <textarea name="paracontent4" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            </textarea>
                        </div> 

                         <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading5 </label></br>
                            <input type="text" name="parahead5" id="parahead5" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" value="" >
                        </div>
                         <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 5 </label></br>
                            <textarea name="paracontent5" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            </textarea>
                        </div> 

                         <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading6 </label></br>
                            <input type="text" name="parahead6" id="parahead6" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" value="" >
                        </div>
                         <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 6 </label></br>
                            <textarea name="paracontent6" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            </textarea>
                        </div> 

                         <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading7 </label></br>
                            <input type="text" name="parahead7" id="parahead7" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" value="" >
                        </div>
                         <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 7 </label></br>
                            <textarea name="paracontent7" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            </textarea>
                        </div> 

                         <div class="mb-4">
                            <label class="text-xl text-gray-600">Heading 8 </label></br>
                            <input type="text" name="parahead8" id="parahead8" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none" value="" >
                        </div>
                         <div class="mb-8">
                            <label class="text-xl text-gray-600">Content 8 </label></br>
                            <textarea name="paracontent8" class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-gray-500 focus:border-gray-900 sm:text-sm focus:outline-none">
                            </textarea>
                        </div> 
                        
                        <!-- heading & content end-->


                        <div class="flex p-1">
                            
                            <button type="submit" class="p-3 text-white bg-blue-500 btn btn-success hover:bg-blue-400" required>Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>
</body>
</html>