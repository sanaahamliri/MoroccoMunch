
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <style>
        :root {
            --font-family-primary: 'Vollkorn', serif;
            --font-family-secondary: 'PT Sans', sans-serif;

            --font-size-title: 32px;
            --line-height-title: 1.4;
            --font-size-caption: 14px;
            --line-height-caption: 1.2;

            --color-text: #222022;
            --color-highlight-primary: #FFEF7E;
            --color-highlight-secondary: #B7F9E9;
            --border-radius-primary: 32px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            padding: 0;
            margin: 0;
        }

        .card {
            background-color: white;
            max-width: 960px;
            border-radius: var(--border-radius-primary);
            box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.1);
            padding: 20px 20px 28px 20px;
            box-sizing: border-box;
            margin: 20px;
            display: flex;
            flex-direction: column;

        }

        .card__image {
            width: 100%;
            max-height: 300px;
            border-radius: var(--border-radius-primary);
            object-fit: cover;
            margin-bottom: 18px;

        }


        .card__date {
            display: block;
            font-family: var(--font-family-secondary);
            font-size: var(--font-size-caption);
            line-height: var(--line-height-caption);
            text-transform: uppercase;
            color: var(--color-text);
            margin-bottom: 6px;


        }

        .card__title {
            font-family: var(--font-family-primary);
            font-size: var(--font-size-title);
            line-height: var(--line-height-title);
            color: var(--color-text);
            box-decoration-break: clone;
            background-image: linear-gradient(90deg, var(--color-highlight-primary), var(--color-highlight-secondary));
            background-size: 100% 42%;
            background-repeat: no-repeat;
            background-position: 0 85%;
            padding: 0 4px;
            margin-left: -4px;
        }
    </style>
</head>

<body>

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
    <div class="card">


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach($plate->images as $image)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('storage/' . $image->url)}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                @endforeach
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>




        <div class="card__content">
            <time datetime="2021-03-30" class="card__date">Add at {{$plate->created_at}}</time>
            <h2 class="card__title">Duis autem vel eum iriure dolor in hend </h2>
            <span class="card__title">Duis autem vel eum <span>
                    <span class="card__title">Duis autem <span>


        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
