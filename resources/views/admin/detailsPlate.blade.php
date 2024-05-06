@extends('layouts.navbarAdmin')

@section('contentC')
<body>

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
            max-width: 900px;
            border-radius: var(--border-radius-primary);
            box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.1);
            padding: 20px 20px 28px 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;

        }

        .card__image {
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

    <div class="card ml-56">


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach($plate->images as $image)
                <div class="hidden w-full duration-700 ease-in-out" data-carousel-item>
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
            <h2 class="card__title">{{$plate->description}} </h2>
            <span class="card__title">by {{$plate->chefs->user->name}} <span>


        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
@endsection