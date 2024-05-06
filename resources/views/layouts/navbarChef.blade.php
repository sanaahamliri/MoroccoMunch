<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <button class="text-center lg:hidden p-2  text-black" onclick="openSidebar()">
        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
            <path d="M4 5L16 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M4 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M4 19L12 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
    <aside>
        <div class="sidebar hidden lg:block fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900 z-40">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">
                    <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                    <h1 class="font-bold text-gray-200 text-[15px] ml-3">MoroccoMunch</h1>
                    <i class=" bi bi-x cursor-pointer ml-28 lg:hidden text-white bg-white p-1 rounded-full " onclick="openSidebar()"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4.70711 3.29289C4.31658 2.90237 3.68342 2.90237 3.29289 3.29289C2.90237 3.68342 2.90237 4.31658 3.29289 4.70711L10.5858 12L3.29289 19.2929C2.90237 19.6834 2.90237 20.3166 3.29289 20.7071C3.68342 21.0976 4.31658 21.0976 4.70711 20.7071L12 13.4142L19.2929 20.7071C19.6834 21.0976 20.3166 21.0976 20.7071 20.7071C21.0976 20.3166 21.0976 19.6834 20.7071 19.2929L13.4142 12L20.7071 4.70711C21.0976 4.31658 21.0976 3.68342 20.7071 3.29289C20.3166 2.90237 19.6834 2.90237 19.2929 3.29289L12 10.5858L4.70711 3.29289Z" fill="#000000" />
                        </svg></i>
                </div>
                <div class="my-2 bg-gray-600 h-[1px]"></div>
            </div>
            <a href="/categories">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="bi bi-house-door-fill"></i>
                    <a href="/chef"><span class="text-[15px] ml-4 text-gray-200 font-bold">Dashboard</span></a>
                </div>
            </a>
            <a href="/reservation_validation">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="bi bi-bookmark-fill"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Reservations</span>
                </div>
            </a>
            


            <a href="signout">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
                </div>
            </a>
        </div>
    </aside>
    <script type="text/javascript">
        function dropdown() {
            document.querySelector("#submenu").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropdown();

        function openSidebar() {
            document.querySelector(".sidebar").classList.toggle("hidden");
        }
    </script>
    @yield('contentB')