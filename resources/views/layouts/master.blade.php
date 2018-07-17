<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://bootswatch.com/4/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/style.min.css') }}" rel="stylesheet">
    <title>R Selvakumar | Financial Advisor</title>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="75">
    <!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark sticky-navbar" id="navbar">
        <a href="#" class="navbar-brand">
            <i class="fa fa-home mr-2"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#planning" class="nav-link">Financial Planning</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#clients" class="nav-link">Clients</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-contact">
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="fa fa-phone mr-2"></i>+91 94865 26371
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="fa fa-envelope mr-2"></i>selvakumar30553@gmail.com
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navigation -->
    @yield('content')
    @include('includes.footer')
    <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <script src="{{URL::asset('js/main.min.js')}}"></script>
    <!-- End Scripts -->
</body>
</html>
