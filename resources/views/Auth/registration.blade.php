<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="{{asset('css/register.css')}}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>


    <!-- component -->
    <section class="bg-white dark:bg-gray-900">
        <div class="flex justify-center lg:h-screen">
            <div class="h-full bg-cover lg:block lg:w-2/5 hidden md:block">
                <img src="img/register.jpeg" alt="" class="h-full">
            </div>

            <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        Get your free account now.
                    </h1>
                    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mt-6">
                            <h1 class="text-gray-500 dark:text-gray-300">Select type of account</h1>

                            <div class="mt-3 md:flex md:items-center md:-mx-2">
                                <div class="flex space-x-2  rounded-xl ">
                                    <label class="radio flex flex-grow items-center justify-center rounded-lg p-1 cursor-pointer border">
                                        <div class="select flex items-center justify-center">
                                            <input type="radio" name="role" value="client" class="peer hidden" />
                                            <span class="flex space-x-2 tracking-widest peer-checked:bg-gradient-to-r peer-checked:from-red-600 peer-checked:to-yellow-300 peer-checked:text-white text-gray-700 p-2 rounded-lg transition duration-150 ease-in-out"> <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="currentColor">
                                                    <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>Client</span>
                                        </div>
                                    </label>


                                    <label class="radio flex flex-grow items-center justify-center rounded-lg p-1 cursor-pointer border">
                                        <div class="select flex items-center justify-center">
                                            <input type="radio" name="role" value="chef" class="peer hidden" />

                                            <span class=" flex space-x-4 tracking-widest peer-checked:bg-gradient-to-r peer-checked:from-red-600 peer-checked:to-yellow-300 peer-checked:text-white text-gray-700 p-2 rounded-lg transition duration-150 ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 400 400" fill="currentColor">
                                                    <path d="M89.5817 120C58.6934 91.5024 74.0344 44.757 110.302 41.133C127.029 39.4629 149.113 54.0714 159.999 54.0714C194.568 54.0714 228.221 27.2561 260.493 54.0714C279.192 69.6052 269.699 99.5044 257.006 107.036" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M90 117C142.667 111.566 197.696 95.755 250 112.449" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M93.0559 139C92.8995 145.073 93.028 151.088 94 157" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M97 155.173C145.65 132.936 205.18 134.027 254 156" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M253 131C253.464 138.692 254 146.28 254 154" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M93.7931 186.199C85.6744 187.218 87.5015 211.695 103.941 211.695C103.941 305 263.001 295 247.277 202.221C256 202.221 265.677 181.04 253.5 179" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M160 206C160.457 203.005 160.774 199.981 161 197" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M196 206C196 203.545 196 200.005 196 197" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M186 245C179.911 247.785 172.5 249.957 168 245.225" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M38 360C47.0818 317.424 79.2813 287.286 125.151 287.286C125.88 287.286 154.503 315.535 180.414 313.586C203.33 311.863 216.097 294.682 235.003 287.286C263.137 276.278 307 338.995 307 358.456" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M350 159C338.607 183.953 286.988 272.605 292.396 306" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M353.983 156C361.109 192.062 371.983 282.642 333 308" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M328 304C318.437 300.114 309.042 295.03 299 293" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M294.975 308C285.934 328.2 276.314 343.303 299 320.79" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M311 320C308.736 331.403 297.744 346.679 290 331.889" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M211 336.863C210.815 349.971 203 348.348 203 336" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M146 351.449C135.34 353.573 138.871 349.231 143.412 344" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>Chef</span>
                                        </div>
                                    </label>

                                </div>

                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">

                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Picture</label>
                                <input type="file" name="image" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full Name</label>
                                <input type="text" placeholder="John" name="name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>


                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                                <input type="password" name="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>



                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                                <input type="email" name="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>



                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                                <input type="password" name="password_confirmation" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>


                            <div>
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone</label>
                                <input type="text" name="phone" placeholder="Enter your phone" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class="flex items-end justify-center w-full">
                                <button type="submit" class="register flex items-center justify-between w-full px-6 py-3.5 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform  rounded-md  focus:outline-none focus:ring focus:ring-opacity-50">
                                    Sign Up

                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                already have an account? <a class="text-blue-500" href="/login">Log in</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</body>

</html>