<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Morocco Munch</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="/index" class="navbar-brand">Morocco <span>Munch</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/index" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/feature" class="nav-item nav-link">Feature</a>
                    <a href="/team" class="nav-item nav-link">Chef</a>
                    @auth

                    <a href="signout" class="nav-item nav-link">Log Out</a>
                    @else
                    <a href="/register" class="nav-item nav-link">Sign Up</a>
                    <a href="login" class="nav-item nav-link">Log in</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->








    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">

                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Explore<span> culinary</span> delights</h1>
                        <p>
                            Revolutionizing Moroccan cuisine. Amateurs showcase talents, enthusiasts explore. Join our vibrant culinary journey!
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog">
                        <div class="container">
                            <div class="section-header text-center">
                                <p>Food Blog</p>
                                <h2>Latest From Food Blog</h2>
                            </div>
                            <div class="sidebar-widget">
                                <div class="search-widget mb-5 ">
                                    <form id="searchForm">
                                        @csrf
                                        @method('GET')
                                        <input class="form-control" id="search" name="search" type="search" placeholder="Search Keyword">
                                    </form>
                                </div>
                            </div>

                            <!-- categories -->
                            <div class="single-tags">

                                @foreach($categorie as $categ)
                                <a onclick="filterCategory('{{$categ->id}}')">{{$categ->name}}</a>
                                @endforeach
                            </div>
                            <!-- categories -->

                            <!--***************start plates****************-->
                            <div id="plates" class="row">
                                @foreach($ValidPlates as $plat)
                                <div class="col-md-6">
                                    <div class="blog-item w-full">
                                        <div class="blog-img h-56 w-56" style="background-image: url('{{asset('storage/' . $plat->images[0]->url)}}'); background-size:cover;  background-position:center; background-repeat:no-repeat">
                                        </div>
                                        <div class="blog-content">
                                            <h2 class="blog-title">{{$plat->name}}</h2>
                                            <div class="blog-meta">
                                                <p><i class="far fa-user"></i> {{$plat->chefs->user->name}}</p>
                                                <p><i class="far fa-list-alt"></i> {{$plat->categories->name}}</p>
                                                <p><i class="far fa-calendar-alt"></i> {{$plat->created_at}}</p>
                                                <p><i class="far fa-comments"></i>{{$plat->comments->count()}}</p>
                                            </div>
                                            <div class="blog-text">
                                                <p>
                                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor...
                                                </p>
                                                <div class="actions">
                                                    <a class="btn custom-btn" href="{{ route('more', $plat->id) }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!--***************end plates****************-->
                        </div>
                    </div>



                </div>

                <div class="col-lg-4 mt-5">
                    <div class="sidebar">

                        <div class="sidebar-widget">
                            <div class="tab-post">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#featured">Latest</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#latest">Featured</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="featured" class="container tab-pane active">
                                        @foreach($latestPlats as $last)
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('storage/' . $last->images[0]->url)}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">{{$last->name}}</a>
                                                <div class="post-meta">
                                                    <div class="flex-column">
                                                        <p>By <a href="">{{$last->chefs->user->name}}</p></a>
                                                        <p>At <a href="">{{$last->created_at}}</p></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div id="popular" class="container tab-pane fade">
                                        @foreach($popularPlats as $popular)
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('storage/' .$popular->images[0]->url)}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">{{$popular->name}}</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">{{$popular->chefs->user->name}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div id="latest" class="container tab-pane fade">
                                        @foreach($featuredPlats as $featured)
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{asset('storage/' . $featured->images[0]->url)}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">{{$featured->name}}</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">{{$featured->chefs->user->name}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sidebar-widget">
                            <h2 class="widget-title">Categories</h2>
                            <div class="category-widget">
                                <ul>
                                    @foreach($categories as $cat)
                                    <li><a href="">{{$cat->name}}</a><span>{{$cat->plates_count}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Post End-->

    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Our Master Chef</h2>
            </div>
            <div class="row">
                @foreach($chefs as $chef)
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('storage/' . $chef->user->imageUser->url)}}" alt="Image">
                            <div class="team-social">

                                <a href="{{route('moreChef', $chef->id) }}">-></i></a>

                            </div>
                        </div>
                        <div class="team-text">
                            <h2>{{$chef->user->name}}</h2>
                            @if($chef->city && $chef->age)
                            <p>{{ $chef->city }}, {{ $chef->age }} years old</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->





    <!-- Footer Start -->
    <div class="footer">

        <div class="copyright">
            <div class="container">
                <p>Copyright &copy; <a href="#">Morocco Munch</a>, All Right Reserved.</p>
                <p>Designed By <a href="https://htmlcodex.com">Hamliri Sanae</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        function filterCategory(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            jQuery.ajax({
                url: "{{ route('plate.filter', ':id') }}".replace(':id', id),
                type: 'get',

                success: function(result) {
                    document.getElementById("plates").innerHTML = "";
                    for (var i = 0; i < result.plates.length; i++) {
                        createPlate(result.plates[i]);
                    }
                }
            })
        }

        function createPlate(plate) {
            const cardDiv = document.createElement("div");
            cardDiv.setAttribute('class', 'col-md-6');
            const cardContent = `
                    <div class="blog-item">
                        <div class="blog-img h-64">
                            <img src="/storage/${plate.images[0].url}"   alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">${plate.name}</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i> ${plate.chefs.user.name}</p>
                                <p><i class="far fa-list-alt"></i> ${plate.categories.name}</p>
                                <p><i class="far fa-calendar-alt"></i> ${plate.created_at}</p>
                                <p><i class="far fa-comments"></i>10</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor...
                                </p>
                                <div class="actions">
                                    <a class="btn custom-btn" href="/detailsMore/${plate.id}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
    `;
            cardDiv.innerHTML = cardContent;
            document.getElementById('plates').appendChild(cardDiv);
        }

        document.getElementById('search').addEventListener('keyup', function() {
            var searchValue = this.value;
            var form = document.getElementById('searchForm');

            jQuery.ajax({
                url: "{{ route('plate.search')}}",
                data: jQuery(form).serialize(),
                type: 'get',

                success: function(result) {
                    console.log(result.plates);
                    if (result.plates.length > 0) {
                        document.getElementById("plates").innerHTML = "";
                        for (var i = 0; i < result.plates.length; i++) {
                            createPlate(result.plates[i]);
                        }
                    } else {
                        document.getElementById("plates").innerHTML = `No results found `;
                    }
                }
            })
        })
    </script>
</body>

</html>