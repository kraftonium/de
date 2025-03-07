<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Divyashakti Enterprise</title>

    <link rel="shortcut icon" type="image/x-icon" href="/backend-assets/img/logo/favicon.png">

    <link rel="stylesheet" href="/backend-assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="/backend-assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/backend-assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="/backend-assets/css/feathericon.min.css">
    <link rel="stylesheet" href="/backend-assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="/backend-assets/css/custom.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <!-- <img class="img-fluid" src="/backend-assets/img/logo/logo-divyashakti.png" alt="Logo"> -->
                        <!-- <img class="img-fluid" src="/backend-assets/img/logo/favicon.png" alt="Logo"> -->

                        <div class="d-flex justify-content-center align-items-center">
                            <img class="img-fluid" src="/backend-assets/img/logo/favicon.png" alt="Logo"
                                style="height: 90px;">
                            <div>
                                <h3 class="mb-0" style="font-weight: bold; color: #fff; margin-top: 10px;">DIVYASHAKTI
                                    <br> ENTERPRISE
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            @if (session('change-password-success'))
                                <div class="alert alert-success" id="password-success-message">
                                    {{ session('change-password-success') }}
                                </div>
                                <script>
                                    setTimeout(function() {
                                        let message = document.getElementById('password-success-message');
                                        if (message) {
                                            message.style.display = 'none';
                                        }
                                    }, 5000); // 5 seconds
                                </script>
                            @endif

                            <span class="text-danger">
                                @error('access')
                                    {{ $message }}
                                @enderror
                            </span>

                            <form action="{{ url('/login-submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Email" name="email"
                                        value="{{ old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3" style="position: relative;">
                                    <input id="passwordInput" class="form-control" type="password"
                                        placeholder="Password" style="padding-right: 40px;" name="password">
                                    <span id="togglePassword"
                                        style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                        <i class="fa-solid fa-eye"></i>
                                        <!-- Replace with your preferred icon library -->
                                    </span>
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" class="from-control mx-1" name="remember" id="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                                <div class="mb-3">
                                    <button class="btn auth-btn w-100" type="submit">Login</button>
                                </div>
                            </form>

                            <div class="text-center forgotpass"><a href="/auth/forgot-password.html">Forgot
                                    Password?</a>
                            </div>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>


                            <div class="text-center dont-have">Don’t have an account? <a
                                    href="{{ url('/register') }}">Register</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/backend-assets/js/jquery-3.7.1.min.js" type="5962768c9f5ae3e70c7b35be-text/javascript"></script>

    <script src="/backend-assets/js/bootstrap.bundle.min.js" type="5962768c9f5ae3e70c7b35be-text/javascript"></script>

    <script src="/backend-assets/js/script.js" type="5962768c9f5ae3e70c7b35be-text/javascript"></script>
    <script src="/backend-assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="5962768c9f5ae3e70c7b35be-|49" defer=""></script>
</body>

</html>
