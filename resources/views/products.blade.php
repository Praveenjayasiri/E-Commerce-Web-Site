<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
</head>

<body class="font-sans antialiased dark:bg-black text-white">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('logo.png') }}"
                    alt="E-commerce App"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"
                            href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link {{ Request::is('products') ? 'active' : '' }}"
                            href="{{ url('/products') }}">Products</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    <nav class="col-12 col-lg-auto text-right mb-2 mb-lg-0">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="btn btn-primary custom-btn transition hover-text-black focus-outline-none focus-visible-ring-[#FF2D20] text-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="btn btn-primary custom-btn transition hover-text-black focus-outline-none focus-visible-ring-[#FF2D20] text-white">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-primary custom-btn transition hover-text-black focus-outline-none focus-visible-ring-[#FF2D20] text-white">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>

    <main>
        <div class="container text-dark mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="https://images.pexels.com/photos/701877/pexels-photo-701877.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img h-100" alt="Dress Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Elegant Dress</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit
                                amet fringilla elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae.</p>
                            <p class="card-text">Quentity Price: <strong>$75.00</strong></p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Purchase</a>
                            <a href="#" class="btn btn-success"><i class="fas fa-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>

                <!-- Additional Product Cards -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="https://images.pexels.com/photos/15070234/pexels-photo-15070234/free-photo-of-stylish-girl-wearing-yellow-outfit.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img h-100" alt="Shoes Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Stylish Shoes</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit
                                amet fringilla elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae.</p>
                            <p class="card-text">Quentity Price: <strong>$75.00</strong></p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Purchase</a>
                            <a href="#" class="btn btn-success"><i class="fas fa-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="https://images.pexels.com/photos/15070234/pexels-photo-15070234/free-photo-of-stylish-girl-wearing-yellow-outfit.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img h-100" alt="Shoes Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Stylish Shoes</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit
                                amet fringilla elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae.</p>
                            <p class="card-text">Quentity Price: <strong>$75.00</strong></p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Purchase</a>
                            <a href="#" class="btn btn-success"><i class="fas fa-cart-plus"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="https://images.pexels.com/photos/15070234/pexels-photo-15070234/free-photo-of-stylish-girl-wearing-yellow-outfit.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img h-100" alt="Shoes Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Stylish Shoes</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit
                                amet fringilla elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae.</p>
                            <p class="card-text">Quentity Price: <strong>$75.00</strong></p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>
                                Purchase</a>
                            <a href="#" class="btn btn-success"><i class="fas fa-cart-plus"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="https://images.pexels.com/photos/1413420/pexels-photo-1413420.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img h-100" alt="Bag Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Trendy Bag</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit
                                amet fringilla elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae.</p>
                            <p class="card-text">Quentity Price: <strong>$75.00</strong></p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>
                                Purchase</a>
                            <a href="#" class="btn btn-success"><i class="fas fa-cart-plus"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="https://images.pexels.com/photos/1395306/pexels-photo-1395306.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img h-100" alt="Watch Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Elegant Watch</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit
                                amet fringilla elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia Curae.</p>
                            <p class="card-text">Quentity Price: <strong>$75.00</strong></p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>
                                Purchase</a>
                            <a href="#" class="btn btn-success"><i class="fas fa-cart-plus"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
                <!-- End of Additional Product Cards -->
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-2 mt-3">
        <p>&copy; 2024 E-commerce App. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="{{ asset('js/products.js') }}"></script>
</body>

</html>
