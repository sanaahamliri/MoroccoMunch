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
            <a href="#" class="navbar-brand">Morocco <span>Munch</span></a>
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

    <div class="footer">

        <div class="copyright">
            <div class="container">
                <p>Copyright &copy; <a href="#">Morocco Munch</a>, All Right Reserved.</p>
                <p>Designed By <a href="https://htmlcodex.com">Hamliri Sanae</a></p>
            </div>
        </div>
    </div>


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









    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>