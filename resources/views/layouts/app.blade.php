<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- extra links -->
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/custom.css','resources/css/product.css'])
    <style>
        @keyframes slidy {
            0% {
                left: 0%;
            }

            20% {
                left: 0%;
            }

            25% {
                left: -100%;
            }

            45% {
                left: -100%;
            }

            50% {
                left: -200%;
            }

            70% {
                left: -200%;
            }

            75% {
                left: -300%;
            }

            95% {
                left: -300%;
            }

            100% {
                left: -400%;
            }
        }

        div#slider {
            overflow: hidden;
        }

        div#slider figure img {
            width: 20%;
            float: left;
        }

        div#slider figure {
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            text-align: left;
            font-size: 0;
            animation: 30s slidy infinite;
        }
    </style>
</head>

<body>
    <?php

    use App\Models\Category;

    $categories = Category::all();
    ?>
    <div id="app">
        <header style="min-height: 60px;" class="header">
            <div class="container">
                <a class="" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a>
                <div class="header-right">
                    <a href="{{ route('cart.list') }}" class="flex items-center">
                        <span class="bi bi-cart"></span>
                        <span class="text-red-700">{{ Cart::getTotalQuantity()}}</span>
                    </a>
                    @guest
                    @if (Route::has('login'))
                    <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
                    @endif
                    @if (Route::has('register'))
                    <a class="nav-link " aria-current="page" href="{{ route('register') }}">Registration</a>
                    @endif
                    @else
                    @auth
                    <a class="nav-link" href="#">
                        {{ Auth::user()->username }}
                    </a>
                    <a class="" href="#">Profile</a>
                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    @endauth
                    @endguest
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#000000; margin-bottom:0;">
            <div class="container">
                <!-- <a class="navbar-brand fw-bold" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 10px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <div class="dropdown-menu">
                                @if($categories)
                                <?php
                                $l = 0;
                                for ($i = 0; $i < 3; $i++) {
                                ?>
                                    <ul>
                                        <?php for ($j = $l; $j < count($categories); $j++) {
                                            $l++;
                                        ?>
                                            <li><a class="dropdown-item" href="{{route('products',$categories[$j]['id'])}}">{{$categories[$j]['name']}}</a></li>
                                        <?php
                                            if ($l % 4 == 0) {
                                                break;
                                            }
                                        } ?>
                                    </ul>
                                <?php } ?>

                                @endif
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">New Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Discount</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="py-2">
            @yield('content')
        </main>

        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Letsmart<span>logo</span></h3>

                <p class="footer-links">
                    <a href="#" class="link-1">Home</a>

                    <a href="#">Blog</a>

                    <a href="#">Pricing</a>

                    <a href="#">About</a>

                    <a href="#">Faq</a>

                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">Letsmart © 2023</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+8801727904010</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">support@letsmart.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-github"></i></a>

                </div>

            </div>

        </footer>
    </div>
</body>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
  
$(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
</html>
</html>