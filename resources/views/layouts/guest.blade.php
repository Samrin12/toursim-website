<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>SUMMER EXPLORING</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
</head>

<body>
    <!-- Header section start -->
    <section class="header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-md px-0">
                    <a class="navbar-brand" href="index.html"><img src="{{asset('assets/image/Logo.png')}}"
                            class="img-fluid w-50 align-items-center" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home.index')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home.about')}}">about us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('tour.index')}}">tours</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('hotel.index')}}">hotels</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('car.create')}}">cars</a>
                            </li>
    
                            @auth

                            @if (auth()->user()->type=='client')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home.index')}}">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}" class="inline">
                                        @csrf
                                        <button type="submit" class="inline nav-link border-0">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                                    
                            @endif 
                            
                            @else
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">sign up</a>
                            </li>

                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    {{$slot}}
    <!-- footer part start -->
    <footer>
        <div class="container">
            <div class="row hg align-items-center justify-content-between">
                <div class="col-md-4 title">
                    <h1>Our Team</h1>
                    <p>We are a collection of several skilled travel and sales professionals based in our agency that
                        have
                        been offering specialized services to groups, corporations, and individual clients from all over
                        the world since 2020.</p>
                    <!-- <div class="icon">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    </div> -->
                </div>
                <div class="col-md-2 list">
                    <h6>about</h6>
                    <ul>
                        <li>History</li>
                        <li>Our Team </li>
                        <li>Brand Guidelines</li>
                        <li>Terms & Condition</li>
                        <li>Privacy Policy</li>
                    </ul>

                </div>
                <div class="col-md-2 list">
                    <h6>services</h6>
                    <ul>
                        <li>How to Order</li>
                        <li> Our Product</li>
                        <li> Order Status</li>
                        <li>Promo</li>
                        <li>Payment Method</li>
                    </ul>
                </div>
                <div class="col-md-2 list">
                    <h6>about</h6>
                    <ul>
                        <li>+8801397253826</li>
                        <li>www.summer@gmail.com</li>
                        <li>Contact Us</li>
                        <li>Help</li>
                        <li>Privacy</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end -->
    <!-- copyright part start -->
    <section class="copyright">
        <p>copyright &copy; all right reserved by <span>SummerExploring.com</span></p>
    </section>
    <!-- copyright part end -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>

