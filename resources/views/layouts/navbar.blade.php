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
        
        @yield('content')