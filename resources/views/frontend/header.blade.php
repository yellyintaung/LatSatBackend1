<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latsat</title>

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css')
</head>
<body>
    <header> 
        <nav class="navbar navbar-expand-sm bg-light fixed-top">
            <div class="container">
                <a class="mobilelogo" href="/" style="display: none;">
                <img src="{{ asset('images/logo.png') }}" width="50px" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse"
                data-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item latsat-nav-pd">
                        <a class="nav-link latsat-nav" href="/index.html">Home</a>
                    </li>
                    <li class="nav-item latsat-nav-pd dropdown">
                        <a class="nav-link latsat-nav dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Availiable Products
                        </a>
                        <!-- Dropdown -->
                        <div class="dropdown-menu latsat-dropdown">
                            <a class="dropdown-item" href="./meat.html">အသားအမျိုးမျိုး</a>
                            <a class="dropdown-item" href="#">ငါးနှင့်ပင်လယ်စာ</a>
                            <a class="dropdown-item" href="#">ဟင်းသီးဟင်းရွက်</a>
                            <a class="dropdown-item" href="#">အသီးအနှံ</a>
                            <a class="dropdown-item" href="#">ဟင်းခတ်အမွှေးအကြိုင်</a>
                            <a class="dropdown-item" href="#">ပန်းအမျိုးမျိုး</a>
                        </div>
                    </li>
                    
                    
                    <!-- Brand -->
                    <a class="navbar-brand d-none d-sm-block" style="padding-bottom:0 ;" href="#">
                        <img src="{{ asset('images/logo.png') }}" width="80px" alt="logo" class="logo" />
                    </a>
                    
                    <li class="nav-item latsat-nav-pd">
                        <a class="nav-link latsat-nav" href="#">
                            <img src="{{ asset('images/supermarket.png') }}" alt="shooping-cart"
                            width="24px" /><span class="count lbcount">
                                <span id="show-count"></span></span></a>
                            </li>
                            <li class="nav-item latsat-nav-pd">
                                <a class="nav-link latsat-nav" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>