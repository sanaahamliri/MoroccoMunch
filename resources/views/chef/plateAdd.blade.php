<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="antialiased ">


    <nav class="flex flex-wrap items-center justify-between p-2 bg-white border-b-2">
        <div class="flex md:hidden">
            <button id="hamburger">
                <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
                <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
            </button>
        </div>

        <div class="toggle hidden flex items-center justify-between w-full md:w-auto md:flex text-right font-bold mt-5 md:mt-0 border-t-2 border-blue-900 md:border-none">
            <div class="w-12 h-12 m-4">
                <a href="/index" class="navbar-brand">Morocco <span>Munch</span></a>
            </div>
            <div class="flex items-center mt-4 gap-8 ml-[38vw]">
                <a href="#" class="flex flex-col items-center mt-4 md:mt-0">
                    <img src="images/iconamoon_news-thin.png" alt="">
                    <span class="text-black text-center hover:text-blue-500 px-3 py-2 border-b-2 border-transparent transition-all duration-300 md:border-none md:hover:border-blue-900">News</span>
                </a>
                <a href="learn.html" class="flex flex-col items-center mt-4 md:mt-0">
                    <img src="images/bi_book.png" alt="">
                    <span class="text-black text-center hover:text-blue-500 px-3 py-2 border-b-2 border-transparent transition-all duration-300 md:border-none md:hover:border-blue-900">Learn</span>
                </a>
                <a href="#" class="flex flex-col items-center mt-4 md:mt-0">
                    <img src="images/jam_write.png" alt="">
                    <span class="text-black text-center hover:text-blue-500 px-3 py-2 border-b-2 border-transparent transition-all duration-300 md:border-none md:hover:border-blue-900">Complaint</span>
                </a>
            </div>
        </div>

        <div class="toggle hidden flex items-center gap-12 w-full md:w-auto md:flex text-right text-bold mt-5 md:mt-0 border-t-2 border-blue-900 md:border-none">


            <!-- Popup container -->
            <div id="popup" class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50 ">
                <div class="bg-white p-6 rounded-lg">
                    <!-- Popup content -->
                    <div class="bg-white rounded-md p-6">

                        <h1 class="text-center text-4xl text-bold h-12 w-auto">Sign up</h1>

                        <h2 class="my-3 text-center tracking-tight text-gray-500">
                            Join over 2 million others learning cyber security
                        </h2>


                        <form class="">
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 ml-0 ">Username</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500 ">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 ml-0 ">Email</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500 ">
                            </div>
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Password</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500 ">
                            </div>

                            <div class="flex justify-between">

                                <button id="closeBtn" class="text-white bg-gray-800 px-4 py-2 rounded-md hover:bg-gray-700">
                                    Close
                                </button>
                                <button class="border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-2 mt-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                                    signup
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <div class="border-t-2 border-gray-300 w-full"></div>
                        <div class="mx-4 text-gray-400 text"><span class="text-xl">OR</span></div>
                        <div class="border-t-2 border-gray-300 w-full"></div>
                    </div>

                    <div class=" flex justify-center gap-12 mx-16 my-8">
                        <button class="flex items-center bg-white border border-gray-300 rounded-lg shadow-md max-w-xs px-6 py-2 text-sm font-medium text-gray-800 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-0.5 0 48 48" version="1.1">

                                <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Color-" transform="translate(-401.000000, -860.000000)">
                                        <g id="Google" transform="translate(401.000000, 860.000000)">
                                            <path d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24" id="Fill-1" fill="#FBBC05"> </path>
                                            <path d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333" id="Fill-2" fill="#EB4335"> </path>
                                            <path d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667" id="Fill-3" fill="#34A853"> </path>
                                            <path d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24" id="Fill-4" fill="#4285F4"> </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>

                    </div>

                </div>
            </div>

        </div>
    </nav>

    <section class="bg-white dark:bg-gray-900 flex justify-between" style="background-image: url('storage/images/about.jpg'); background-size: cover; object-fit: cover; width: 100%;">
        <div class="py-8 mx-12 ">
            <h1 class="mb-4 text-5xl font-extrabold text-white">Report Cyber Threats: Your Safety Matters</h1>

            <p class="mb-8 mt-4 text-lg font-normal text-white">Search hundreds of walkthroughs and challenges by
                security category or difficulty.</p>
        </div>
        <div class="flex items-center justify-end mx-12">
            <img src="images/none.svg.png" alt="">
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <form method="POST" action="{{ route('plate.store') }}" enctype="multipart/form-data" class="border-2 border-black-300 p-4 m-4 rounded-lg">
                        @method('POST')
                        @csrf
                        <h1 class="text-center font-bold text-3xl p-8">Complaint Submission Form</h1>
                        
                        <div class="mb-4 p-8">
                            <label class="text-xl text-gray-600">Choose category... <span class="text-red-500">*</span></label><br>
                            <select name="IdCategory" class="border-2 border-gray-400 p-2 bg-[#E9ECEF] rounded-lg  w-full" required>
                                <option value="" selected disabled>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4 p-8">
                            <label class="text-xl text-gray-600">Name... <span class="text-red-500">*</span></label><br>
                            <input type="text" name="name" class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full" required placeholder="Name...">
                        </div>
                        <div class="mb-4 p-8">
                            <label class="text-xl text-gray-600">Description <span class="text-red-500">*</span></label><br>
                            <textarea name="description" class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full" required></textarea>
                        </div>


                        <div class="mb-4 p-8">
                            <label class="text-xl text-gray-600">Ingredients... <span class="text-red-500">*</span></label><br>
                            <textarea name="ingredients" class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full" required></textarea>
                        </div>

                        <div class="mb-4 p-8">
                            <label class="text-xl text-gray-600">pictures <span class="text-red-500">*</span></label><br>
                            <input type="file" name="image[]" multiple class="border-2 border-gray-300 p-2 bg-[#E9ECEF] rounded-lg  w-full" required>
                        </div>


                        <div class="flex p-8">
                            <button type="submit" class="py-2 px-4 max-w-md  flex justify-center items-center bg-white text-[#79BF00] border-2 border-[#79BF00] rounded-lg w-full">
                                Submit complaint..
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>
    <script>
        CKEDITOR.replace('content');
    </script>