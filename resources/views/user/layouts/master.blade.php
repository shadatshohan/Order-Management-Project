<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JOIN CODER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset ('customer/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset ('customer/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset ('customer/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset ('customer/css/style.css')}}" rel="stylesheet">

    <!-- {{-- custom css link --}} -->
    <link rel="stylesheet" href="{{asset ('customer/css/custom.css')}}">
</head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 position-fixed top-0 start-0 d-flex align-items-center justify-content-center bg-white bg-opacity-75" style="z-index: 1050;">
            <div class="pulse-loader"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar d-none d-lg-block" style="background-color: #191970">
                <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"
                    ><i class="fas fa-map-marker-alt me-2 text-secondary"></i>
                    <a href="https://maps.google.com/?q=05,+Mohakhali+(5th+Floor)+Paragon+Building,+Dhaka,+Bangladesh" class="text-white">05, Mohakhali (5th Floor) Paragon Building, , Dhaka, Bangladesh</a></small
                    >
                    <small class="me-3"
                    ><i class="fas fa-envelope me-2 text-secondary"></i
                    ><a href="mailto:info@agorasuperstores.com" class="text-white">info@agorasuperstores.com</a></small
                    >
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"
                    ><small class="text-white mx-2">Privacy Policy</small>/</a
                    >
                    <a href="#" class="text-white"
                    ><small class="text-white mx-2">Terms of Use</small>/</a
                    >
                    <a href="#" class="text-white"
                    ><small class="text-white ms-2">Sales and Refunds</small></a
                    >
                </div>
                </div>
            </div>

            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                           <a href="{{route('userDashboard')}}" class="navbar-brand">
                            <img src="{{ asset('customer/img/agora.png') }}" alt="Agora Logo" style="height: 110px;"></a>
                            <button class="navbar-toggler py-1 px-3 border-1" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                            </button>

                            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                                <div class="navbar-nav mx-auto">
                                    <a href="{{route('userDashboard')}}" class="nav-item nav-link active text-dark fw-semibold">Home</a>
                                    <a href="{{route('shopList')}}" class="nav-item nav-link text-dark fw-semibold">Shop</a>
                                    <a href="{{route('contactUs')}}" class="nav-item nav-link text-dark fw-semibold">Contact</a>
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <input type="submit" value="Logout" class="btn btn-warning rounded-pill px-4">
                                    </form>
                                </div>

                                <div class="d-flex align-items-center gap-4">
                                    <a href="{{route('cart')}}" class="text-dark position-relative">
                                        <i class="fa-solid fa-cart-shopping fa-2x"></i>
                                        @if($cartCount > 0)
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                {{ $cartCount }}
                                            </span>
                                        @endif
                                    </a>
                                    <a href="{{route('orderList')}}" class="text-dark position-relative">
                                        <i class="fa fa-shopping-bag fa-2x"></i>
                                    </a>

                                    <div class="dropdown">
                                        <a href="#" class="d-flex align-items-center text-dark dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-user fa-2x me-2"></i>
                                            <span class="fw-semibold">
                                                @if (auth()->user()->name != null)
                                                    {{auth()->user()->name}}
                                                @else
                                                    {{auth()->user()->nickname}}
                                                @endif
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm rounded-3">
                                            <li><a class="dropdown-item" href="{{route('userProfileDetails')}}">Profile</a></li>
                                            <li><a class="dropdown-item" href="{{route('changePassword')}}">Change Password</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                </nav>
            </div>
        </div>

        @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid text-white-50 footer pt-5 mt-5" style="background-color:rgb(9, 9, 71);">
        <div class="container py-5">
            <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <a href="#">
                        
                            <p class="text-secondary mb-0">since 2001</p>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mx-auto">
                            <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                            <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="d-flex justify-content-end pt-3">
                            <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href="#"><i class="fab fa-tiktok"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-secondary btn-md-square rounded-circle" href="#"><i class="fab fa-telegram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Why People Like us!</h4>
                        <p class="mb-4">Agora was the first retail chain to open in Bangladesh in 2001. Since then, the store has been fulfilling the everyday shopping needs of customers through great price, a wide assortment of goods, best quality, and best service.</p>
                        <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-white">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Shop Info</h4>
                        <a class="btn-link text-white" href="">About Us</a>
                        <a class="btn-link text-white" href="">Contact Us</a>
                        <a class="btn-link text-white" href="">Privacy Policy</a>
                        <a class="btn-link text-white" href="">Terms & Condition</a>
                        <a class="btn-link text-white" href="">Return Policy</a>
                        <a class="btn-link text-white" href="">FAQs & Help</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Account</h4>
                        <a class="btn-link text-white" href="">My Account</a>
                        <a class="btn-link text-white" href="">Shop details</a>
                        <a class="btn-link text-white" href="">Shopping Cart</a>
                        <a class="btn-link text-white" href="">Wishlist</a>
                        <a class="btn-link text-white" href="">Order History</a>
                        <a class="btn-link text-white" href="">International Orders</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Contact</h4>
                        <p>Address: 05, Mohakhali (5th Floor) Paragon Building, , Dhaka, Bangladesh</p>
                        <p>Email: info@agorasuperstores.com</p>
                        <p>Phone: +09612-311211</p>
                        <p>Payment Accepted</p>
                        <img src="img/payment.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4" style="background-color: rgb(9, 9, 71);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>thefloral.com</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    Designed By Nazmus Shadat Shohan<a class="border-bottom" href=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset ('customer/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset ('customer/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset ('customer/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset ('customer/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset ('customer/js/main.js')}}"></script>

    <script>
        function loadFile(event) {
            var reader = new FileReader();

            reader.onload = function() {
                var output = document.getElementById('output');

                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0])
        }


    </script>
    </body>

    @yield('js-section')

</html>
