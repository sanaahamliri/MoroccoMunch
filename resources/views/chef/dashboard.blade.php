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
                        <li class="mb-3 p-2 rounded-full flex items-center mx-auto bg-white cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <g>
                                        <path stroke-dasharray="4" stroke-dashoffset="4" d="M12 3V5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="4;0" />
                                        </path>
                                        <path stroke-dasharray="28" stroke-dashoffset="28" d="M12 5C8.68629 5 6 7.68629 6 11L6 17C5 17 4 18 4 19H12M12 5C15.3137 5 18 7.68629 18 11L18 17C19 17 20 18 20 19H12">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s" dur="0.4s" values="28;0" />
                                        </path>
                                        <animateTransform attributeName="transform" begin="0.8s" dur="6s" keyTimes="0;0.05;0.15;0.2;1" repeatCount="indefinite" type="rotate" values="0 12 3;3 12 3;-3 12 3;0 12 3;0 12 3" />
                                    </g>
                                    <path stroke-dasharray="8" stroke-dashoffset="8" d="M10 20C10 21.1046 10.8954 22 12 22C13.1046 22 14 21.1046 14 20">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" values="8;0" />
                                        <animateTransform attributeName="transform" begin="1s" dur="6s" keyTimes="0;0.05;0.15;0.2;1" repeatCount="indefinite" type="rotate" values="0 12 8;6 12 8;-6 12 8;0 12 8;0 12 8" />
                                    </path>
                                </g>
                            </svg>
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
                    <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                        <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                            <i class="fas fa-chart-pie fa-sm text-indigo-600"></i>
                        </div>
                        <p class="text-xs mt-1 text-center font-semibold">Dashboard</p>
                    </div>
                    <!-- End Navitem -->
                    <!-- Start Navitem -->
                    <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                        <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                            <i class="fas fa-calculator fa-sm text-indigo-600"></i>
                        </div>
                        <p class="text-xs mt-1 text-center font-semibold">All Plates</p>
                    </div>
                    <!-- End Navitem -->
                    <!-- Start Navitem -->
                    <div class="p-2 flex flex-col items-center bg-white rounded-md justify-center shadow-xl cursor-pointer">
                        <div class="rounded-full p-2 bg-indigo-200 flex flex-col items-center">
                            <i class="fas fa-wallet fa-sm text-indigo-600"></i>
                        </div>
                        <p class="text-xs mt-1 text-center font-semibold">Reservations</p>
                    </div>
                    <!-- End Navitem -->
                    <!-- Start Navitem -->

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
                <div class="grid pb-10  mt-4 ">
                    <!-- Start Content-->
                    <div class="mb-2">
                        <p class="text-lg font-semibold text-gray-400">Statistics</p>
                    </div>
                    <div class="flex border-b-2 pb-5 justify-center">
                        <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                            <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-4 mt-3">
                                <div class="p-4">
                                    <p class="text-xl font-bold">37,500</p>
                                    <p class="text-xs font-semibold text-gray-400">Total number of plats added</p>
                                </div>
                                <div class="p-4">
                                    <p class="text-xl font-bold">9,200</p>
                                    <p class="text-xs font-semibold text-gray-400">Total number of reservations</p>
                                </div>

                                <div class=" p-4">
                                    <button class='bg-blue-500 text-white p-2 rounded text-2xl font-bold'>
                                        <a href="/plate">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                                                <g id="Edit / Add_Plus">
                                                    <path id="Vector" d="M6 12H12M12 12H18M12 12V18M12 12V6" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </a>
                                    </button>
                                    <p class="text-xs font-semibold text-gray-400"></p>
                                </div>



                                <!-- Modal -->


                                <!-- Modal -->






                            </div>
                        </div>

                    </div>
                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-3">


                        <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                            <div class="absolute inset-0 bg-yellow-600 bg-opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                                <div>
                                    <h3 class="text-center text-white text-lg">
                                        Bastilla fruit de mer </h3>
                                    <h3 class="text-center text-white text-3xl mt-2 font-bold">
                                        Bastilla </h3>
                                    <div class="flex space-x-4 mt-4">
                                        <button class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline 
                                  focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                            view details
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                            <div class="absolute inset-0 bg-yellow-600 bg-opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                                <div>
                                    <h3 class="text-center text-white text-lg">
                                        CousCous with tfaya
                                    </h3>
                                    <h3 class="text-center text-white text-3xl mt-2 font-bold">
                                        CousCous
                                    </h3>
                                    <div class="flex space-x-4 mt-4">
                                        <button class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline 
                                    focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                            view details </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Content-->
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <script>
        const modal = document.querySelector('.animated');
        const closeButton = document.querySelectorAll('.modal-close');

        const modalClose = () => {
            modal.classList.remove('fadeIn');
            modal.classList.add('fadeOut');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 500);
        }

        const openModal = () => {
            modal.classList.remove('fadeOut');
            modal.classList.add('fadeIn');
            modal.style.display = 'flex';
        }

        for (let i = 0; i < closeButton.length; i++) {

            const elements = closeButton[i];

            elements.onclick = (e) => modalClose();

            modal.style.display = 'none';

            window.onclick = function(event) {
                if (event.target == modal) modalClose();
            }
        }
    </script>

</body>

</html>