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
                    <h2>{{$chef->user->name}} Detail</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Chef Detail</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="container-fluid">



                    <div class="single-bio">
                        <div class="single-bio-img">
                            <img src="{{asset('storage/' . $chef->user->imageUser->url)}}" />
                        </div>
                        <div class="single-bio-text">
                            <h3>{{$chef->user->name}}</h3>
                            @if($chef->age)
                            <p>
                                {{$chef->age}}
                            </p>
                            @endif
                        </div>
                    </div>

                    <div class="single-content"> @if($chef->user->bio)

                        <h2> {{$chef->bio}}</h2>

                        @endif

                    </div>



                    <div class="single-comment">
                        <ul class="comment-list">
                            <li class="comment-item">
                                <div class="comment-body">
                                    <div class="comment-img">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                                            <path d="M5.11596 12.7268L8.15456 9.08666C8.46255 8.69067 8.61655 8.49267 8.69726 8.27061C8.76867 8.07411 8.79821 7.86486 8.784 7.65628C8.76793 7.42055 8.67477 7.18766 8.48846 6.72187L7.77776 4.94513C7.50204 4.25581 7.36417 3.91116 7.12635 3.68525C6.91678 3.48618 6.65417 3.3519 6.37009 3.29856C6.0477 3.23803 5.68758 3.32806 4.96733 3.50812L3 4.00002C3 14 9.99969 21 20 21L20.4916 19.0324C20.6717 18.3122 20.7617 17.952 20.7012 17.6297C20.6478 17.3456 20.5136 17.083 20.3145 16.8734C20.0886 16.6356 19.7439 16.4977 19.0546 16.222L17.4691 15.5878C16.9377 15.3752 16.672 15.2689 16.4071 15.2608C16.1729 15.2536 15.9404 15.3013 15.728 15.4002C15.4877 15.512 15.2854 15.7144 14.8807 16.1191L11.7943 19.1569" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="comment-text">
                                        <h3><a href="">Get in touch with him</a></h3>
                                        <span>{{$chef->user->phone}}</span>

                                    </div>
                                </div>
                            </li>


                            </li>
                        </ul>
                    </div>
                    <div class="comment-form">

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
                <p>Designed By <a href="https://htmlcodex.com">Hamliri Sanae</a></p>
            </div>
        </div>
    </div>
    

   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script src="js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>