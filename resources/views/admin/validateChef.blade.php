@extends('layouts.navbarAdmin')

@section('contentC')

<body>
    <div class="flex h-screen w-full  bg-gray-800 " x-data="{openMenu:1}">
        <!--Start SideBar-->

        <!-- Start Open Menu -->
        <aside class="animate__animated animate__fadeInLeft w-1/4 relative z-0 flex-shrink-0 hidden px-4 overflow-y-auto bg-gray-100 sm:block " x-show="openMenu ==  1" @click.away="openMenu = null" style="display: none;">
            <div class="mb-6">
                <!--Start Sidebar for open menu -->
                <div class="grid grid-cols-1 gap-4 grid-cols-2 mt-6">
                    <!-- Start Navitem -->
                    <a href="/admin">
                        <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                            <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                                <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                            </div>
                            <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
                        </div>
                    </a>
                    <!-- End Navitem -->
                    <!-- Start Navitem -->
                    <a href="/validate">
                        <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                            <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                                <i class="fas fa-calculator fa-sm text-indigo-600"></i>
                            </div>
                            <p class="text-xs mt-1 text-center font-semibold">Clients Access</p>
                        </div>
                    </a>
                    <!-- End Navitem -->
                    <!-- Start Navitem -->
                    <a href="/validateChef">
                        <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                            <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                                <i class="fas fa-wallet fa-sm text-indigo-600"></i>
                            </div>
                            <p class="text-xs mt-1 text-center font-semibold">Chef Access</p>
                        </div>
                    </a>
                    <!-- End Navitem -->
                    <!-- Start Navitem -->
                    <a href="/adminplate">
                        <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                            <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                                <i class="fas fa-archive fa-sm text-indigo-600"></i>
                            </div>
                            <p class="text-xs mt-1 text-center font-semibold">Plates Validate</p>
                        </div>
                    </a>
                    <!-- End Navitem -->
                </div>
                <!--End Sidebar for open menu -->
            </div>
        </aside>
        <!-- End Open Menu -->


        <!-- End Sidebar -->
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <!--Start Topbar -->
            <!--End Topbar -->
            <main class="relative z-0 flex-1 pb-8 px-6 w-full  ml-0 lg:ml-56 bg-white">


                <div class="mb-2">
                    <p class="text-lg font-semibold text-gray-400">Statistics</p>
                </div>
                <div class="flex border-b-2 pb-5 justify-center">
                    <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-4 mt-3">
                            <div class="p-4">
                                <p class="text-xl font-bold">{{$BlockedChefs}}</p>
                                <p class="text-xs font-semibold text-gray-400">Total number of blocked chefs</p>
                            </div>
                            <div class="p-4">
                                <p class="text-xl font-bold">{{$FreeChefs}}</p>
                                <p class="text-xs font-semibold text-gray-400">Total number of unblocked chefs</p>
                            </div>
                        </div>
                    </div>

                </div>
                <table class="border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Client name</th>
                            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Client Email</th>
                            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Status</th>
                            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($chefs as $chef)

                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Chefs name</span>
                                {{$chef->user->name}}
                            </td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Chefs Email</span>
                                {{$chef->user->email}}
                            </td>
                            </td>
                            @if($chef->status)
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                                <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">UnBlocked</span>
                            </td>
                            @else
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                                <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Blocked</span>
                            </td>
                            @endif
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                                <div class="action">
                                    <form action="{{ route('chef.ban',['chef'=>$chef->id]) }}" method="post">
                                        @method("PUT")
                                        @csrf
                                        @if($chef->status)
                                        <button type="submit" class="text-blue-400 hover:text-blue-600 underline">UnBlock</button>
                                        @else
                                        <button type="submit" class="text-blue-400 hover:text-blue-600 underline pl-6">block</button>
                                        @endif
                                    </form>
                                    <form action="{{ route('chef.ban',['chef'=>$chef->id]) }}" method="POST">
                                        @method("PUT")
                                        @csrf
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </main>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>
@endsection