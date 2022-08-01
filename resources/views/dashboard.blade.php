<!DOCTYPE html>
<html>
<head>
    <title>Laravel Auth</title>
    <link href="bootstrap-5.2.0-dist/css/bootstrap.css" rel="stylesheet">
    <link href="fontawesome-free-6.1.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">Laravel Auth</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')
    <div class='footer-customize'>
        <div class="card">
            <div class="container">
                <div class="heading text-center">
                    <div class="head1">Laravel Auth</div>
                    <p class="bdr"></p>
                </div>
                <div class="card-body">
                    <div class="row m-0">
                        <div class="card col-12 col-md-3">
                            <div class="card-content">
                                <i class="fa-solid fa-align-left"></i>
                                <div class="card-title">
                                    FEATURES
                                </div>
                                <p><small>Login</small></p>
                                <p><small>Register</small></p>
                                <p><small>List of users</small></p>
                                <p><small>Logout</small></p>
                            </div>
                        </div>
                        <div class="card col-12 col-md-3">
                            <div class="card-content">
                                <i class="far fa-handshake fa-3x"></i>
                                <div class="card-title">
                                    ACCEPT ELECTRONIC
                                    CHECK
                                </div>
                                <p><small>Save customers' cards for future phone orders</small></p>
                                <div class="learn-more">
                                    <p>
                                        <small>
                                            LEARN MORE
                                            <label><i class="fas fa-angle-right"></i></label>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-3">
                            <div class="card-content">
                                <i class="fas fa-mobile-alt fa-3x"></i>
                                <div class="card-title">
                                    STREAMLINE PHONE
                                    PAYMENTS
                                </div>
                                <p><small>Save customers' cards for future phone orders</small></p>
                                <div class="learn-more">
                                    <p>
                                        <small>
                                            LEARN MORE
                                            <label><i class="fas fa-angle-right"></i></label>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-3">
                            <div class="card-content">
                                <i class="fas fa-user-secret fa-3x"></i>
                                <div class="card-title">
                                    STAY<br />
                                    SECURE
                                </div>
                                <p><small>Save customers' cards for future phone orders</small></p>
                                <div class="learn-more">
                                    <p>
                                        <small>
                                            LEARN MORE
                                            <label><i class="fas fa-angle-right"></i></label>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p>
                        <small class="follow-text">Copy right @2022 - All right reserve</small> <label class="footer-right">
                        </label>
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
