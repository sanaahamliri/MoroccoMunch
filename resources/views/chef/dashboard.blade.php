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
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: "Quicksand", sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            background: #7f7fd5;
            background: linear-gradient(to right, #91eae4, #86a8e7, #7f7fd5);
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            margin-block: 2rem;
            gap: 2rem;
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        .card {
            display: flex;
            flex-direction: column;
            width: clamp(20rem, calc(20rem + 2vw), 22rem);
            overflow: hidden;
            box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
            border-radius: 1em;
            background: #ECE9E6;
            background: linear-gradient(to right, #FFFFFF, #ECE9E6);

        }



        .card__body {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }


        .tag {
            align-self: flex-start;
            padding: .25em .75em;
            border-radius: 1em;
            font-size: .75rem;
        }

        .tag+.tag {
            margin-left: .5em;
        }

        .tag-blue {
            background: #56CCF2;
            background: linear-gradient(to bottom, #2F80ED, #56CCF2);
            color: #fafafa;
        }

        .tag-brown {
            background: #D1913C;
            background: linear-gradient(to bottom, #FFD194, #D1913C);
            color: #fafafa;
        }

        .tag-red {
            background: #cb2d3e;
            background: linear-gradient(to bottom, #ef473a, #cb2d3e);
            color: #fafafa;
        }

        .card__body h4 {
            font-size: 1.5rem;
            text-transform: capitalize;
        }

        .card__footer {
            display: flex;
            padding: 1rem;
            margin-top: auto;
        }

        .user {
            display: flex;
            gap: .5rem;
        }

        .user__image {
            border-radius: 50%;
        }

        .user__info>small {
            color: #666;
        }

        .box {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border-radius: 3px;
            margin-bottom: 10px;
        }
    </style>
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
                <div class="grid pb-10  mt-4 ">
                    <!-- Start Content-->
                    <div class="mb-2">
                        <p class="text-lg font-semibold text-gray-400">Statistics</p>
                    </div>
                    <div class="flex border-b-2 pb-5 justify-center">
                        <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
                            <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-4 mt-3">
                                <div class="p-4">
                                    <p class="text-xl font-bold">{{$platesCount}}</p>
                                    <p class="text-xs font-semibold text-gray-400">Total number of plats added</p>
                                </div>
                                <div class="p-4">
                                    <p class="text-xl font-bold">{{$reservationsCount}}</p>
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
                    <div class="container">
                        @foreach($plates as $plate)

                        <div class="card">

                            <div class="card__body">
                                <div class="action">
                                    <form action="{{ route('plate.destroy', $plate->id) }}" method="post">
                                        <a href="{{ route('plate.edit', $plate->id) }}" class="tag tag-blue">Update</a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="tag tag-blue">Delete</button>
                                </div>
                                </form>

                                <h4>{{$plate->name}}</h4>
                                <p> {{$plate->categories->name}}
                                </p>
                            </div>
                            <a href="{{ route('singlePage', $plate->id) }}" class=" box tag tag-blue ml-5 mb-1">
                                <p>view more</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor">
                                        <circle cx="12" cy="12" r="3.5" />
                                        <path d="M20.188 10.934c.388.472.582.707.582 1.066c0 .359-.194.594-.582 1.066C18.768 14.79 15.636 18 12 18c-3.636 0-6.768-3.21-8.188-4.934c-.388-.472-.582-.707-.582-1.066c0-.359.194-.594.582-1.066C5.232 9.21 8.364 6 12 6c3.636 0 6.768 3.21 8.188 4.934Z" />
                                    </g>
                                </svg>
                            </a>
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