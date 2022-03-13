<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/styles.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-success shadow sticky-top">
    <div class="container">
        <a href="" class="navbar-brand">SMS</a>
        <ul class="navbar-nav fw-bold text-white">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="" class="nav-link">All Course</a></li>
            <li><a href="{{route('user-register')}}" class="nav-link">Registration</a></li>
            <li><a href="{{route('user-login')}}" class="nav-link">Log in</a></li>
        </ul>
    </div>
</nav>

@yield('body')
<footer class="py-5 bg-dark pb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-body rounded-0 h-250">
                    <h3>About Institution</h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, autem ea, ipsa molestias nisi qui quis quos reiciendis soluta sunt vero voluptatibus. Deleniti distinctio et illo praesentium quasi reprehenderit similique.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card card-body rounded-0 h-250">
                    <h3>Popular Link</h3>
                    <hr/>
                    <ul>
                        <li><a href="">Popular Course One</a></li>
                        <li><a href="">Popular Course Two</a></li>
                        <li><a href="">Popular Course Three</a></li>
                        <li><a href="">Popular Course Four</a></li>
                        <li><a href="">Popular Course Four</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card card-body rounded-0 h-250">
                    <h3>Follow us on</h3>
                    <hr class="mt-2">
                    <ul class="nav">
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitch"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-linkedin"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-discord"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-telegram-plane"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-google-plus-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-github-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-reddit-alien"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-behance-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-tiktok"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-viber"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-whatsapp-square"></i></a></li>
                    </ul>
                </div>
            </div>

            <hr class="bg-danger mt-5">
            <div class="row">
                <div class="col-12">
                    <p class="text-white text-center">Copyright@2022, All Rights Reserved by BASIS SIEP PWLFB-3</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('/')}}js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
