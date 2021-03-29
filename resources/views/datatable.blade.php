<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

</head>
<body>
    <body class="font-sans antialiased bg-gray-200">
        <x-navbar/>
        
    <div class="container px-4 mx-auto sm:px-8">
        <div class="py-8">
            <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-blue-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="form">Add Member</a>{{session('msg')}}
                   
            <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                    <table class="min-w-full leading-normal" id="myTable">
                         <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Id
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    UserName
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Email
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Phone
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Gender
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Plan
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Started
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    End
                                </th>
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Amount
                                </th>
                                
                                <th
                                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                                    Status
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            @foreach ($arrayList as $crud)

                            <tr>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap"></p>{{$crud->id}}
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    
                                    <div class="flex items-center">
                                        
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$crud->name}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap"></p>{{$crud->email}}
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap"></p>{{$crud->phone}}
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap"></p>{{$crud->gender}}
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap"><p>{{$crud->plan}}
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$crud->startDate}}
                                        
                                    </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$crud->endDate}}
                                        
                                    </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$crud->amount}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 rounded-full opacity-50"></span>
                                        <a href="to_edit/{{$crud->id}}" class="relative">Edit</a>
                                         
                                    </span>
                                    
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 rounded-full opacity-50"></span>
                                        
                                         <a href="to_delete/{{$crud->id}}" class="relative">Delete</a>
                                    </span>
                                </td>
                                
                            </tr>
                                
                            @endforeach
                                
                            
                            
                           
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
        </div>
    </div>


</body>
<script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready( function () {
     $('#myTable').DataTable({
         dom: 'Bfrtip',
        buttons: [
             'excel', 'pdf', 'print'
        ]
     });
      } );

</script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>








</html>