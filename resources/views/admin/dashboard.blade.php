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
    <link href="/dist/tailwind.css" rel="stylesheet" />

</head>

<body>
    <div class="flex h-screen w-full bg-gray-800">
        <!--Start SideBar-->
        <!-- Start Open Menu -->
        <aside>
            <span class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900" onclick="openSidebar()">
                <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
            </span>
            <div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
                <div class="text-gray-100 text-xl">
                    <div class="p-2.5 mt-1 flex items-center">
                        <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                        <h1 class="font-bold text-gray-200 text-[15px] ml-3">MoroccoMunch</h1>
                        <i class="bi bi-x cursor-pointer ml-28 lg:hidden" onclick="openSidebar()"></i>
                    </div>
                    <div class="my-2 bg-gray-600 h-[1px]"></div>
                </div>
                <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
                    <i class="bi bi-search text-sm"></i>
                    <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
                </div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="bi bi-house-door-fill"></i>
                    <a href="/categories"><span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span></a>
                </div>
                <a href="/validate">
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                    <i class="bi bi-bookmark-fill"></i>
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Bookmark</span>
                </div>
                </a>

                <div class="my-4 bg-gray-600 h-[1px]"></div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white" onclick="dropdown()">
                    <i class="bi bi-chat-left-text-fill"></i>
                    <a href="/validateChef">
                    <div class="flex justify-between w-full items-center">
                        <span class="text-[15px] ml-4 text-gray-200 font-bold">Chatbox</span>
                        <span class="text-sm rotate-180" id="arrow">
                            <i class="bi bi-chevron-down"></i>
                        </span>
                    </div>
                    </a>
                </div>
                <a href="/adminplate">
                <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold" id="submenu">
                    <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                        Social
                    </h1>
                    <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                        Personal
                    </h1>
                    <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
                        Friends
                    </h1>
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
                                    <p class="text-xl font-bold">{{$clientCount}}</p>
                                    <p class="text-xs font-semibold text-gray-400">Total number of clients</p>
                                </div>
                                <div class="p-4">
                                    <p class="text-xl font-bold">{{$chefCount}}</p>
                                    <p class="text-xs font-semibold text-gray-400">Total number of chefs</p>
                                </div>
                                <div class=" p-4">
                                    <p class="text-xl font-bold">{{$categorieCount}}</p>
                                    <p class="text-xs font-semibold text-gray-400">Total number of categories</p>
                                </div>
                                <div class=" p-4">
                                    <p class="text-xl font-bold">{{$plateCount}}</p>
                                    <p class="text-xs font-semibold text-gray-400">Total number of plates</p>
                                </div>

                                <div class="p-4">
                                    <button onclick="openModal()" class='bg-blue-500 text-white p-2 rounded text-2xl font-bold'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                                            <g id="Edit / Add_Plus">
                                                <path id="Vector" d="M6 12H12M12 12H18M12 12V18M12 12V6" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </button>
                                    <p class="text-xs font-semibold text-gray-400">Add category</p>
                                </div>

                                <div class="fixed inset-0 z-50 flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
                                    <div class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                        <div class="modal-content py-4 text-left px-6">
                                            <!--Title-->
                                            <div class="flex justify-between items-center pb-3">
                                                <p class="text-2xl font-bold">Add Category</p>
                                                <div class="modal-close cursor-pointer z-50" onclick="closeModal()">
                                                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--Body-->
                                            <div class="col-span-2">
                                                <form action="{{ route('categories.store') }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nom" required>
                                                    <div class="flex justify-end pt-2">
                                                        <button type="button" onclick="closeModal()" class="focus:outline-none px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
                                                        <button type="submit" class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 bg-green-400 hover:bg-green-300 rounded-lg text-black hover:bg-teal-400">Confirm</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <!-- Modal toggle -->



                                <!-- Modal body -->


                            </div>
                        </div>

                    </div>
                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-3">

                        @foreach($categories as $category)
                        <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                            <div class="absolute inset-0 bg-yellow-600 bg-opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                                <div>
                                    <h3 class="text-center text-white text-lg">
                                        category name </h3>
                                    <h3 class="text-center text-white text-3xl mt-2 font-bold">
                                        {{$category->name}}
                                    </h3>
                                    <div class="flex space-x-4 mt-4">
                                        <button data-modal-target="edit-modal{{ $category->id }}" data-modal-toggle="edit-modal{{ $category->id }}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" class="block uppercase mx-auto shadow bg-white text-indigo-600 focus:shadow-outline 
                                            focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                            Edit
                                        </button>
                                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="block uppercase mx-auto shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline 
                                   focus:outline-none text-white text-xs py-3 px-4 rounded font-bold">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main modal -->
                        <div id="edit-modal{{ $category->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Edit Category
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal-g" data-modal-target="#edit-modal{{ $category->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>

                                    <form class="p-4 md:p-5" action="{{ route('categories.destroy', $category->id)}}" method="POST">
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Name</label>
                                                <input type="text" name="name" value="{{ $category->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type category name">
                                            </div>
                                        </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Edit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        @endforeach


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