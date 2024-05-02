<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .action {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="flex h-screen w-full bg-gray-800 " x-data="{openMenu:1}">
        <!--Start SideBar-->
        <aside class="w-20 relative z-20 flex-shrink-0  px-2 overflow-y-auto bg-indigo-600 sm:block">
            <div class="mb-6">
                <!--Start logo -->
                <div class="flex justify-center">
                    <div class="w-14 h-14 rounded-full bg-gray-300 border-2 border-white mt-2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVxhAxJ4D7MOeTTj6kR9PBeZonW5HM7giKjTbEmR-HMBwf3G1VqGnlwpO1kWrdyIZu8_U&usqp=CAU" class="rounded-full w-auto" />
                    </div>
                </div>
                <!--End logo -->
                <!--Start NavItem -->
                <div>
                    <ul class="mt-6 leading-10 px-4">
                        <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-blue-400 cursor-pointer" @click="openMenu !== 1 ? openMenu = 1 : openMenu = null">
                            <i class="fas fa-align-left fa-sm text-white"></i>
                        </li>
                        <li class="absolute bottom-0 mb-3 p-2 rounded-full flex items-center mx-auto bg-white cursor-pointer">
                            <i class="fas fa-power-off fa-sm text-indigo-600"></i>
                        </li>
                    </ul>
                </div>
                <!--End NavItem -->
            </div>
        </aside>
        <!-- Start Open Menu -->
        <aside class="animate__animated animate__fadeInLeft w-52 relative z-0 flex-shrink-0 hidden px-4 overflow-y-auto bg-gray-100 sm:block " x-show="openMenu ==  1" @click.away="openMenu = null" style="display: none;">
            <div class="mb-6">
                <!--Start Sidebar for open menu -->
                <div class="grid grid-cols-1 gap-4 grid-cols-2 mt-6">
                    <!-- Start Navitem -->
                    <a href="/categories">
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
            <main class="relative z-0 flex-1 pb-8 px-6 bg-white">


                <div class="mb-2">
                    <p class="text-lg font-semibold text-gray-400">Statistics</p>
                </div>
                <div class="flex border-b-2 pb-5 justify-center">
                    <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-4 mt-3">
                            <div class="p-4">
                                <p class="text-xl font-bold">{{$BlockedClients}}</p>
                                <p class="text-xs font-semibold text-gray-400">Total number of blocked clients</p>
                            </div>
                            <div class="p-4">
                                <p class="text-xl font-bold">{{$FreeClients}}</p>
                                <p class="text-xs font-semibold text-gray-400">Total number of unblocked clients</p>
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
                        @foreach($clients as $c)
                        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Clients name</span>
                                {{$c->user->name}}
                            </td>
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Client Email</span>
                                {{$c->user->email}}
                            </td>
                            @if($c->status)
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                                <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Blocked</span>
                            </td>
                            @else
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                                <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">UnBlocked</span>
                            </td>
                            @endif
                            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                                <div class="action">
                                    @if($c->status)
                                    <form action="{{ route('client.ban',['client'=>$c->id]) }}" method="post">
                                        @method("PATCH")
                                        @csrf
                                        <button type="submit" class="text-blue-400 hover:text-blue-600 underline">UnBlock</button>
                                    </form>
                                    @else
                                    <form action="{{ route('client.ban',['client'=>$c->id]) }}" method="post">
                                        @method("PATCH")
                                        @csrf
                                        <button type="submit" class="text-blue-400 hover:text-blue-600 underline">Block</button>
                                    </form>
                                    @endif
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