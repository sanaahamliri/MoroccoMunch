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
                        <h2>Why Choose Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Features</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-header">
                        <p>Why Choose Us</p>
                        <h2>Our Key Features</h2>
                    </div>
                    <div class="feature-text">
                        <div class="feature-img">
                            <div class="row">
                                <div class="col-6">
                                    <img src="img/feature-1.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="img/feature-2.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="img/feature-3.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="img/feature-4.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-cooking"></i>
                                <h3> Morocco's Finest Chef Selections</h3>
                                <p>
                                Indulge in the exquisite culinary creations crafted by our esteemed Moroccan chefs. Each dish is a masterpiece, meticulously prepared using authentic recipes passed down through generations.                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-vegetable"></i>
                                <h3>Natural ingredients</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-meat"></i>
                                <h3>Premium Quality Products</h3>
                                <p>
                                We pride ourselves on delivering only the highest quality products to our customers. From premium cuts of meat to hand-picked vegetables, we ensure that every ingredient meets our rigorous standards of excellence                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-courier"></i>
                                <h3>Fresh Vegetables & Meats</h3>
                                <p>
                                Experience the unparalleled freshness of our vegetables and meats, hand-selected to guarantee optimal taste and texture. From vibrant produce to succulent cuts of meat, every ingredient is chosen with care to enhance your dining experience.                                </p>
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
                    <p>Copyright &copy; <a href="#">MoroccoMunch</a>, All Right Reserved.</p>
                    <p>Designed By <a>Hamliri Sanae</a></p>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       
        <script src="js/main.js"></script>
    </body>
</html>
