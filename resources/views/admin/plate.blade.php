@extends('layouts.navbarAdmin')

@section('contentC')
<body>
    <div class="flex h-screen w-full bg-gray-800 " x-data="{openMenu:1}">
   
        <!-- End Open Menu -->


        <!-- End Sidebar -->
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <!--Start Topbar -->
            <!--End Topbar -->
            <main class="relative z-0 flex-1 pb-8 px-6  ml-0 lg:ml-56 bg-white">


                <div class="mb-2">
                    <p class="text-lg font-semibold text-gray-400">Statistics</p>
                </div>
                <div class="flex border-b-2 pb-5 justify-center">
                    <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-4 mt-3">
                            <div class="p-4">
                                <p class="text-xl font-bold">{{$validPlatesCount}}</p>
                                <p class="text-xs font-semibold text-gray-400">Total number of validated plates</p>
                            </div>
                            <div class="p-4">
                                <p class="text-xl font-bold">{{$unvalidPlatesCount}}</p>
                                <p class="text-xs font-semibold text-gray-400">Total number of unvalidated plates</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-12 gap-6">
                    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                        <div class="col-span-12 mt-5">
                            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                <div class="bg-white p-4 shadow-lg rounded-lg">
                                    <div class="flex justify-between">
                                        <h1 class="font-bold text-base text-purple-600">Plates Manege</h1>
                                    </div>
                                    <div class="mt-4">
                                        <div class="flex flex-col">
                                            <div class="-my-2 overflow-x-auto">
                                                <div class="py-2 align-middle inline-block min-w-full">
                                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                        <table class="min-w-full divide-y divide-gray-200">
                                                            <thead>
                                                                <tr>
                                                                    <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">picture</span>
                                                                        </div>
                                                                    </th>
                                                                    <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Plate Title</span>
                                                                        </div>
                                                                    </th>
                                                                    <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Plate Chef</span>
                                                                        </div>
                                                                    </th>
                                                                    <th colspan="3" class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer justify-center">
                                                                            <span class="mr-2">Action</span>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="bg-white divide-y divide-gray-200">
                                                                @foreach($InvalidPlates as $plato)

                                            
                                                                <tr>

                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 w-5 ">
                                                                        <img src="{{asset('storage/' . $plato->images[0]->url)}}" alt="pic">
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p> {{$plato->name}}
                                                                        </p>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p> {{$plato->chefs->user->name}}</p>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <div class="flex space-x-4">
                                                                            <form action="{{ route('singlePageAdmin', $plato->id) }}" method="get">

                                                                                <button type="submit" class="cursor-pointer text-blue-500 hover:text-blue-600">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                    </svg>
                                                                                    <p>View</p>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <div class="flex space-x-4">
                                                                            <form action="{{ route('admin.plate',['plate'=>$plato->id]) }}" method="post">
                                                                                @method("PATCH")
                                                                                @csrf
                                                                                <button type="submit" class="cursor-pointer text-green-500 hover:text-green-600">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                                    </svg>
                                                                                    <p>Accept</p>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <div class="flex space-x-4">
                                                                            <!-- delete pop-up trigger -->
                                                                            <form action="{{ route('admin.plateRefuse',['plate'=>$plato->id]) }}" method="post">
                                                                            @method("DELETE")
                                                                                @csrf
                                                                                <button type="submit" class=" cursor-pointer text-red-500 hover:text-red-600">
                                                                                    <i class="fa-solid fa-box-archive"></i>
                                                                                    <p>Refuse</p>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
</body>

</html>
@endsection