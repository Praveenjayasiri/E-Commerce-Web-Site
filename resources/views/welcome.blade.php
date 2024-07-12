<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
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
        <!-- Hero Banner -->
        <div class="hero-banner text-center">
            <div class="container">
                <h1 class="display-4">Welcome to Our E-commerce Store</h1>
                <p class="lead">Discover the best products at unbeatable prices.</p>
                <a href="{{ url('/products') }}" class="btn btn-primary btn-lg mt-3">Shop Now</a>
            </div>
        </div>

        <!-- Featured Products -->
        <div class="container my-5">
            <h2 class="text-center mb-4 text-dark">Featured Products</h2>
            <div class="row featured-products">
                <!-- Example Product -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://assets.vogue.com/photos/62f6a400d51389085c5d4ba7/3:4/w_748%2Cc_limit/slide_4.jpg"
                            class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title overflow-hidden"
                                style="white-space: nowrap; text-overflow: ellipsis;">Product Name Here</h5>
                            <p class="card-text">$49.99</p>
                            <a href="{{ url('/products') }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat for more products -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://assets.vogue.com/photos/62f6a400d51389085c5d4ba7/3:4/w_748%2Cc_limit/slide_4.jpg"
                            class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title overflow-hidden"
                                style="white-space: nowrap; text-overflow: ellipsis;">Product Name Here</h5>
                            <p class="card-text">$59.99</p>
                            <a href="{{ url('/products') }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://assets.vogue.com/photos/62f6a400d51389085c5d4ba7/3:4/w_748%2Cc_limit/slide_4.jpg"
                            class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title overflow-hidden"
                                style="white-space: nowrap; text-overflow: ellipsis;">Product Name Here</h5>
                            <p class="card-text">$69.99</p>
                            <a href="{{ url('/products') }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promotional Section -->
        <div class="promo-section text-center">
            <div class="container">
                <h2 class="mb-4">Summer Sale: Up to 40% Off</h2>
                <p class="lead">Don’t miss out on our exclusive summer sale. Shop now and save big on our top
                    products!</p>
                <a href="{{ url('/products') }}" class="btn btn-primary btn-lg mt-3">Shop Sale</a>
            </div>
        </div>

        <!-- Additional Section -->
        <div class="container my-5">
            <h2 class="text-center mb-4 text-dark">New Arrivals</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://assets.vogue.com/photos/62f6a400d51389085c5d4ba7/3:4/w_748%2Cc_limit/slide_4.jpg"
                            class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title overflow-hidden"
                                style="white-space: nowrap; text-overflow: ellipsis;">Product Name Here</h5>
                            <p class="card-text">$59.99</p>
                            <a href="{{ url('/products') }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://assets.vogue.com/photos/62f6a400d51389085c5d4ba7/3:4/w_748%2Cc_limit/slide_4.jpg"
                            class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title overflow-hidden"
                                style="white-space: nowrap; text-overflow: ellipsis;">Product Name Here</h5>
                            <p class="card-text">$59.99</p>
                            <a href="{{ url('/products') }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://assets.vogue.com/photos/62f6a400d51389085c5d4ba7/3:4/w_748%2Cc_limit/slide_4.jpg"
                            class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title overflow-hidden"
                                style="white-space: nowrap; text-overflow: ellipsis;">Product Name Here</h5>
                            <p class="card-text">$59.99</p>
                            <a href="{{ url('/products') }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://assets.vogue.com/photos/62f6a400d51389085c5d4ba7/3:4/w_748%2Cc_limit/slide_4.jpg"
                            class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title overflow-hidden"
                                style="white-space: nowrap; text-overflow: ellipsis;">Product Name Here</h5>
                            <p class="card-text">$59.99</p>
                            <a href="{{ url('/products') }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://assets.vogue.com/photos/62f6a400d51389085c5d4ba7/3:4/w_748%2Cc_limit/slide_4.jpg"
                            class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title overflow-hidden"
                                style="white-space: nowrap; text-overflow: ellipsis;">Product Name Here</h5>
                            <p class="card-text">$59.99</p>
                            <a href="{{ url('/products') }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-2 mt-3">
        <p>&copy; 2024 E-commerce App. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
