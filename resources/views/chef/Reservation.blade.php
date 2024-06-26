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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="flex h-screen w-full bg-gray-800 " x-data="{openMenu:1}">
        <!--Start SideBar-->
        <aside class="w-20 relative z-20 flex-shrink-0  px-2 overflow-y-auto bg-indigo-600 sm:block">
            <div class="mb-6">
                <!--Start logo -->
                <a href="/profileChef">
                    <div class="w-14 h-14 rounded-full  mt-2">
                        <img src="{{asset('storage/' . Auth::user()->imageUser->url)}}" class="rounded-full w-14 h-14 border-2 border-white " />
                    </div>
                </a>
                <!--End logo -->
                <!--Start NavItem -->
                <div>
                    <ul class="mt-6 leading-10 px-4">
                        <li class="mb-3 p-2 rounded-md flex items-center justify-center bg-blue-400 cursor-pointer" @click="openMenu !== 1 ? openMenu = 1 : openMenu = null">
                            <i class="fas fa-align-left fa-sm text-white"></i>
                        </li>

                        <div class=" md:hidden">
                            <a href="/chef" class="rounded-full p-2 bg-white flex flex-col items-center">
                                <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                            </a>
                        </div>
                        <div class="md:hidden">
                            <a href="/reservation_validation" class="rounded-full mt-3 p-2 bg-white flex flex-col items-center">
                                <i class="fas fa-wallet fa-sm text-indigo-600"></i>
                            </a>

                        </div>
                        <a href="signout">
                            <li class="absolute bottom-0 mb-3 p-2 rounded-full flex items-center mx-auto bg-white cursor-pointer">
                                <i class="fas fa-power-off fa-sm text-indigo-600"></i>
                            </li>
                        </a>

                    </ul>
                </div>
                <!--End NavItem -->
            </div>
        </aside>
        <!-- Start Open Menu -->
        <aside class="animate__animated animate__fadeInLeft w-52 relative z-0 flex-shrink-0 hidden px-4 overflow-y-auto bg-gray-100 sm:block " x-show="openMenu ==  1" @click.away="openMenu = null" style="display: none;">
            <div class="mb-6">
                <div class="grid grid-cols-1 gap-4 grid-cols-2 mt-6">
                    <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                        <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                            <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                        </div>
                        <a href="/chef">
                            <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
                        </a>
                    </div>

                    <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                        <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                            <i class="fas fa-wallet fa-sm text-indigo-600"></i>
                        </div>
                        <a href="/reservation_validation">
                            <p class="text-xs mt-1 text-center font-semibold">Reservations</p>
                        </a>
                    </div>

                </div>
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
                                <p class="text-xl font-bold">123456</p>
                                <p class="text-xs font-semibold text-gray-400">Total number of reservations</p>
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
                                        <h1 class="font-bold text-base text-purple-600">Reservation Manage</h1>
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
                                                                            <span class="mr-2">Plate reserved</span>
                                                                        </div>
                                                                    </th>
                                                                    <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Client Email</span>
                                                                        </div>
                                                                    </th>
                                                                    <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Reservation Time</span>
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
                                                                @foreach($reservations as $reservation)
                                                                <tr>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 w-5 ">
                                                                        <p> {{$reservation->plates->name}}
                                                                        </p>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p> {{$reservation->clients->user->email}}

                                                                        </p>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p> {{$reservation->created_at}}
                                                                        </p>
                                                                    </td>
                                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <div class="flex space-x-4">
                                                                            <form action="{{route('reservation.update',$reservation)}}" method="post">
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
                                                                            <form action="{{route('reservation.destroy',$reservation)}}" method="post">
                                                                                @csrf
                                                                                @method('DELETE')
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