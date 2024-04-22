<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>

       
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
            gap: 3rem;
        }

        .wrapper {
            max-width: 75rem;
            width: 100%;
            padding: min(3rem, 5vw);
        }

        form {
            padding: 1.5rem;
            border-radius: 0.5rem;
        }

        legend {
            font-weight: 700;
        }

        fieldset>*+* {
            margin-top: 0.5rem;
        }

        form>*+* {
            margin-top: 1.5rem;
        }

        .form__group {
            display: flex;
            align-items: center;
        }

        input[type="checkbox"],
        input[type="radio"] {
            width: 1.5em;
            height: 1.5em;
            margin-right: 0.65rem;
        }

        input[type="range"],
        progress {
            margin-left: auto;
            flex: 0 1 50%;
        }

        form:nth-child(2n) {
            color-scheme: dark;
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Morocco <span>Munch</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/feature" class="nav-item nav-link">Feature</a>
                    <a href="/team" class="nav-item nav-link active">Chef</a>
                    <a href="/register" class="nav-item nav-link">Log Out</a>
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
                    <h2>Personalization</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Personalization</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="wrapper">
        <div class="grid">
            <form action="">
                <fieldset class="border-2 border-black p-4">
                    <legend>Select the ingredients You don't want</legend>
                    <div class="form__group">
                        <input type="checkbox" id="berries_1" value="strawberries" name="berries">
                        <label for="berries_1">Strawberries</label>
                    </div>
                    <div class="form__group">
                        <input type="checkbox" id="berries_2" value="blueberries" name="berries">
                        <label for="berries_2">Blueberrie</label>
                    </div>
                    <div class="form__group">
                        <input type="checkbox" id="berries_3" value="bananas" name="berries">
                        <label for="berries_3">Bananas (yes, they are berries)</label>
                    </div>
                </fieldset>
                <fieldset class="border-2 border-black p-4">
                    <legend>Choose your delivery preference</legend>
                    <div class="form__group">
                        <input type="radio" id="delivery_1" value="collect" name="delivery">
                        <label for="delivery_1">Collect in store</label>
                    </div>
                    <div class="form__group">
                        <input type="radio" id="delivery_2" value="home-delivery" name="delivery">
                        <label for="delivery_2">Home delivery</label>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>