<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/templates/user/img/fav.png') }}">
    <meta name="author" content="CodePixar">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Merch Store</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/user/css/main.css') }}">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
        }

        .login_box_area {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;

        }

        .login_box_area .login_form_inner {
            border-radius: 8px;
        }

        .login_box_area h3 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;

            width: 100%;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .primary-btn {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 18px;
            border-radius: 30px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .primary-btn:hover {
            background-color: #2980b9;
        }

        .nav-link {
            color: #3498db;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #2980b9;
        }

        @media (max-width: 768px) {
            .login_box_area {
                margin-top: 20px;
            }

            .login_form_inner {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

    <!-- Login Box Area -->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                        <form class="row login_form" action="/post-login" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group text-center">
                                <a>Don't have an account?</a><a class="nav-link" href="{{ route('register') }}">Register</a>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="primary-btn">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS Scripts -->
    <script src="{{ asset('assets/templates/user/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="{{ asset('assets/templates/user/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/templates/user/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/templates/user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/templates/user/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/templates/user/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/templates/user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/templates/user/js/owl.carousel.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('assets/templates/user/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('assets/templates/user/js/main.js') }}"></script>
</body>

</html>
