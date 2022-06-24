<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield("title") | Quetta D'e Cafe</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/booktanle.css')}}">

    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('vendor/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- External JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="{{URL::asset('vendor/bootstrap/popper.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendor/select2/select2.min.js')}} "></script>
    <script src="{{URL::asset(' vendor/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
    <script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Main JS -->

    <script src="{{URL::asset('js/app.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/style.min.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{URL::asset('js/book.js')}}"></script>

</head>

<body>
    <nav id="navbar-header" class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
                <img src="img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-menu"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex justify-content-between">
                    <li class="nav-item only-desktop">
                        <a class="nav-link" id="side-nav-open" href="#">
                            <span class="lnr lnr-menu"></span>
                        </a>
                    </li>
                    <div class="d-flex flex-lg-row flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('specialdish') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Special Dishes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('specialdish') }}">Beef Steak Sauce</a>
                                <a class="dropdown-item" href="{{ url('specialdish') }}">Salmon Zucchini</a>
                            </div>
                        </li>
                    </div>
                </ul>

                <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                    <h4>Quetta D'e Cafe</h4>
                </a>
                <ul class="navbar-nav d-flex justify-content-between">
                    <div class="d-flex flex-lg-row flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('menu') }}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('team') }}">Team</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('reservation') }}">Reservation</a>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a id="side-search-open" class="nav-link" href="#">
                            <span class="lnr lnr-magnifier"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield("content")
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="{{URL::asset('vendor/bootstrap/popper.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendor/select2/select2.min.js')}} "></script>
    <script src="{{URL::asset('vendor/owlcarousel/owl.carousel.min.js')}} "></script>
    <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
    <script src="{{URL::asset('vendor/stellar/jquery.stellar.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Main JS -->
    <script src="{{URL::asset('js/app.min.js')}} "></script>
    <script src="{{URL::asset('js/re.js')}}"></script>
</body>

</html>