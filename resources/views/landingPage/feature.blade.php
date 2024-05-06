<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MoroccoMunch</title>
       
       
        <link href="img/favicon.ico" rel="icon">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Morocco <span>Munch</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                    @auth
                    <a href="/client" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/feature" class="nav-item nav-link">Feature</a>
                    <a href="/team" class="nav-item nav-link">Chef</a>
                    <a href="signout" class="nav-item nav-link">Log Out</a>
                    @else
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/feature" class="nav-item nav-link">Feature</a>
                    <a href="/team" class="nav-item nav-link">Chef</a>
                    <a href="/register" class="nav-item nav-link">Sign Up</a>
                    <a href="login" class="nav-item nav-link">Log in</a>
                    @endauth
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
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
        <!-- Page Header End -->
        

        <!-- Feature Start -->
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
        <!-- Feature End -->


        <!-- Footer Start -->
        <div class="footer">
          
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">MoroccoMunch</a>, All Right Reserved.</p>
                    <p>Designed By <a>Hamliri Sanae</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       
        <script src="js/main.js"></script>
    </body>
</html>
