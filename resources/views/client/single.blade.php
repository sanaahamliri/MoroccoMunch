<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MoroccoMunch</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-light navbar-light ">
        <div class="container-fluid">
            <a href="/index" class="navbar-brand">Morocco <span>Munch</span></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                    @auth
                    <li class="nav-item">
                        <a href="/client" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/feature" class="nav-link">Feature</a>
                    </li>
                    <li class="nav-item">
                        <a href="/team" class="nav-link">Chef</a>
                    </li>
                    <li class="nav-item">
                        <a href="signout" class="nav-link">Log Out</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/feature" class="nav-link">Feature</a>
                    </li>
                    <li class="nav-item">
                        <a href="/team" class="nav-link">Chef</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="nav-link">Log in</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Blog Detail</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Detail</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    @if(session('success'))
                    <!-- Alert Success -->
                    <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto max-w-2xl">
                        <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                            <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                            </path>
                        </svg>
                        <span class="text-green-800">{{session('success')}}</span>
                    </div>

                    @endif
                    @if(session('error'))
                    <!-- Alert Success -->
                    <div class="bg-red-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto max-w-2xl">
                        <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                            <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                            </path>
                        </svg>
                        <span class="text-green-800">{{session('error')}}</span>
                    </div>

                    @endif
                    <div class="single-content">

                        <h1 class="text-5xl font-extrabold dark:text-white">{{$plate->name}}<small class="ms-3 font-semibold text-base text-gray-500 dark:text-gray-400">{{$plate->categories->name}}</small></h1>

                        <br>

                        <div>
                            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                    <!-- Item 1 -->
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
                        </div>
                        <br>
                        <div class="flex justify-center items-center">
                            <p>
                                {{$plate->description}}
                            </p>
                        </div>
                        <br>
                        <h4 style="color: #fbaf32;">Plate Ingredients : </h4>
                        <p>
                            @php
                            $array = explode(" ", $plate->ingredients);
                            echo implode(" | ", $array);
                            @endphp
                        </p>
                    </div>

                    <div class="single-bio">
                        <div class="single-bio-img">
                            <img src="{{asset('storage/' . $plate->chefs->user->imageUser->url)}}" />
                        </div>
                        <div class="single-bio-text">
                            <h3>{{$plate->chefs->user->name}}</h3>
                            @if($plate->chefs->bio)
                            <p>
                                {{$plate->chefs->bio}}
                            </p>
                            @endif
                        </div>
                    </div>



                    <div class="actions">
                        <form action="{{ route('plate.reserve') }}" method="post">
                            @csrf
                            <input type="hidden" name="plateId" value="{{ $plate->id }}">
                            <button class="btn custom-btn flex gap-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 1024 1024" class="icon" version="1.1">
                                    <path d="M359.8 368.7c-83.5 37-150 103.4-187.1 186.9-5.6 12.6 0.1 27.3 12.7 32.9 3.3 1.5 6.7 2.2 10.1 2.2 9.6 0 18.7-5.5 22.8-14.8 32.1-72.2 89.5-129.6 161.7-161.6 12.6-5.6 18.3-20.3 12.7-32.9-5.5-12.6-20.3-18.3-32.9-12.7z m214.6-108.5c7.2-11.8 11.6-25.5 11.6-40.3 0-42.8-34.7-77.4-77.4-77.4-42.8 0-77.4 34.7-77.4 77.4 0 14.8 4.4 28.6 11.6 40.3-216.7 31.9-383.5 219-383.5 444.4v54.1c0 13.8 11.2 25 25 25H933c13.8 0 25-11.2 25-25v-54.1c-0.1-225.4-167-412.4-383.6-444.4zM908 733.7H109.2v-29.1c0-220.2 179.2-399.3 399.4-399.3S908 484.4 908 704.6v29.1z m24.9 100.2H84.2c-13.8 0-25 11.2-25 25s11.2 25 25 25h848.7c13.8 0 25-11.2 25-25s-11.2-25-25-25z" fill="currentColor" />
                                </svg>Reserver</button>
                        </form>
                    </div>
                    <br>

                    <div class="single-related">
                        <h2>Related Post</h2>

                        @foreach($relatedPlates as $relatedPlate)
                        <div class="owl-carousel related-slider">
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="{{asset('storage/' . $relatedPlate->images[0]->url)}}" />
                                </div>
                                <div class="post-text">
                                    <a href="">{{$relatedPlate->name}}</a>
                                    <div class="post-meta">
                                        <p>By<a href="">{{$relatedPlate->chefs->user->name}}</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>

                    <div class="single-comment">
                        <h2>{{$plate->comments->count()}} Comments</h2>
                        <ul class="comment-list">
                            @foreach($comments as $comment)
                            <li class="comment-item">
                                <div class="comment-body">
                                    <div class="comment-img">
                                        <img src="{{asset('storage/' . $comment->client->user->imageUser->url)}}" />
                                    </div>
                                    <div class="comment-text">
                                        <h3><a href="">{{$comment->client->user->name}}</a></h3>
                                        <span>{{$comment->created_at}}</span>
                                        <p>
                                            {{$comment->content}}
                                        </p>
                                        @if($comment->client->id == Auth::user()->client->id)
                                        <form action="{{route('comment.destroy',$comment)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn bg-red-600">delete</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="comment-form">
                        <h2>Leave a comment</h2>
                        <form action="{{route('comment.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="message">Comment *</label>
                                <textarea name="content" id="message" cols="30" rows="5" class="form-control"></textarea>
                                <input type="hidden" name="plate_id" value="{{$plate->id}}">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn custom-btn">
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
    
    <div class="footer">

        <div class="copyright">
            <div class="container">
                <p>Copyright &copy; <a href="#">Morocco Munch</a>, All Right Reserved.</p>
                <p>Designed By <a href="#">Hamliri Sanae</a></p>
            </div>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   
    <script src="/public/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>

</html>