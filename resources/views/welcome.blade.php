<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HOMEPAGE</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

    <!-- CSS links -->
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cyborg/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resp.css') }}">


</head>

<body>
    
    <!-- Modal For Signing In -->
    <div class="modal fade" id="sign-in-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="sign-in-modal-label">SIGN IN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="" onclick="preventDefault()" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal For Signing Up -->
    <div class="modal fade" id="sign-up-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="sign-up-modal-label">SIGN UP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="first_name" placeholder="First Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" placeholder="Last Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" placeholder="Age" min="0" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="sex" class="custom-select">
                              <option value="" selected>Sex</option>
                              <option value="1">Male</option>
                              <option value="0">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" placeholder="Type Your Password Again" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="" onclick="preventDefault()" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <nav class="menu-md hide">
        <ul class="menu-md-list">
            <li class="menu-md-item"> <a href="#" class="menu-md-link">Home</a></li>
            <li class="menu-md-item"><a href="#" class="menu-md-link">About Us</a></li>
            <li class="menu-md-item"><a href="#" class="menu-md-link">Pricing</a></li>
            <li class="menu-md-item"><a href="#" class="menu-md-link">Why us?</a></li>
            <li class="menu-md-item"><a href="#" class="menu-md-link">Profiles</a></li>
        </ul>
    </nav>

    <button class="navbar-toggler-md" type="button">
                    <!-- <span class="navbar-toggler-icon" style="color: white"></span> -->
        <img src="{{asset('images/bars-solid.svg')}}" width="24px">
    </button>

    <main class="main-container">
        <header class="header">
            <nav class="nav-links navbar navbar-expand-md">
                <a class="navbar-brand" href="#">
                    <div class="logo">
                        <figure class="logo-figure">
                            <span class="logo-image"></span>
                            <figcaption class="logo-figcaption">
                                <h1>Site de rencontre</h1>
                            </figcaption>
                        </figure>
                    </div>
                </a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <!-- <span class="navbar-toggler-icon" style="color: white"></span> -->
                    <img src="{{ asset('images/bars-solid.svg') }}" width="24px">
                </button>
                <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar"> -->
                    <ul class="nav-links-list">
                        <li class="nav-item"><a href="#" class="nav-item-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-item-link">About Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-item-link">Pricing</a></li>
                        <li class="nav-item"><a href="#" class="nav-item-link">Why us?</a></li>
                        <li class="nav-item"><a href="#" class="nav-item-link">Profiles</a></li>
                    </ul>
                <!-- </div> -->
            </nav>

            <div class="sign-in-sign-up">
                <div class="sign sign-in" data-toggle="modal" data-target="#sign-in-modal">Se connecter</div>
                <div data-toggle="modal" data-target="#sign-up-modal" class="sign sign-up">S'inscrire</div>
            </div>
        </header>

        <div class="start-content">
            <h1 class="start-content-big-title">Meet Big And Beautiful Love Here</h1>
            <p class="start-content-description">If you are seeking love and want an easy way to meet local singles, Dateletto is the way to go. Browse through profiles of locals and decide who you want to send a message that is based on interests and other information listed there.</p>
            <div class="see-profiles">
                <a href="#" class="see-profiles-button">See Profiles</a>
            </div>
        </div>
    </main>

    <section class="about-us container">
        <h2 class="font-weight-bold">About us</h2>
        <div class="row">
            <div class="col-sm-12 col-md-4 mb-5 mb-md-0">
                <div class="search-image">
                    <img src="{{ asset('images/search.png') }}">
                </div>
                <div class="search-text">
                    <h3>Search</h3>
                    <p>If you are seeking love and want an easy way to meet local singles, Dateletto is the way to go. Browse through profiles of locals and decide who you want to send a message that is based on interests and other information listed there.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mb-5 mb-md-0">
                <div class="search-image">
                    <img src="images/match.png">
                </div>
                <div class="search-text">
                    <h3>Match</h3>
                    <p>If you are seeking love and want an easy way to meet local singles, Dateletto is the way to go. Browse through profiles of locals and decide who you want to send a message that is based on interests and other information listed there.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="search-image">
                    <img src="images/chat.png" width="135px" class="image-match">
                </div>
                <div class="search-text">
                    <h3>Chat</h3>
                    <p>If you are seeking love and want an easy way to meet local singles, Dateletto is the way to go. Browse through profiles of locals and decide who you want to send a message that is based on interests and other information listed there.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="caracteristique">
        <div class="container-caracteristique">
            <div class="row mb-5">
                <div class="col-sm-12 col-md-6">
                    <h3 class="text-center">Message</h3>
                    <p class="text-justify">If you are seeking love and want an easy way to meet local singles, Dateletto is the way to go. Browse through profile</p>
                </div>
                <div class="col-sm-12 col-md-6 text-center">
                    <img src="images/Calque-16.png" class="img-fluid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-12 col-md-6 text-center d-none d-md-block">
                    <img src="images/Calque-15.png" class="img-video img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <h3 class="text-center">Video</h3>
                    <p class="text-justify">If you are seeking love and want an easy way to meet local singles, Dateletto is the way to go. Browse through profile</p>
                </div>
                <div class="col-sm-12 text-center col-md-6 d-md-none">
                    <img src="images/Calque-15.png" class="img-video img-fluid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-12 col-md-6">
                    <h3 class="text-center">Chat</h3>
                    <p class="text-justify">If you are seeking love and want an easy way to meet local singles, Dateletto is the way to go. Browse through profile</p>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <img src="images/Calque-17.png" class="image-chat img-fluid">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="temoignages container">
        <h3 class="font-weight-bold text-center">Temoignages</h3>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('images/image1.jpg')}}" class="img-fluid">
                <h5 class="text-center">Rose et Jaques</h5>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('images/image2.jpg')}}" class="img-fluid">
                <h5 class="text-center">Linho et Aline</h5>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('images/image3.jpg')}}" class="img-fluid">
                <h5 class="text-center">Dera et Ruth</h5>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('images/image4.jpg')}}" class="img-fluid">
                <h5 class="text-center">Sandra et Eric</h5>
            </div>
        </div>
    </section>

    <section class="footer mb-3">
        <div>
            <ul>
                <li>
                    Charte reseaux sociaux
                </li>
                <li>
                    Mentions legales
                </li>
                <li>
                    Plan du site
                </li>
                <li>
                    CGV
                </li>
            </ul>
            <p>
                Agence Web Attichy, Compiègne, Soissons, Noyon, Oise | 2011 / 2020 © Tous droits réservés
            </p>
        </div>
    </section>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

</body>

</html>