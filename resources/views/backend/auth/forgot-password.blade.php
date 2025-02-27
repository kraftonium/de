<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Forgot Password | Divyashakti Enterprise</title>

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
                        <img class="img-fluid" src="/backend-assets/img/logo/favicon.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Forgot Password?</h1>
                            <p class="account-subtitle">Enter your email to get a OTP</p>

                            <form action="{{ url('/admin-forgot-password-submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Email" name="email">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-0">
                                    <button class="btn auth-btn w-100" type="submit">Send OTP</button>
                                </div>
                            </form>

                            <div class="text-center dont-have">Remember your password? <a
                                    href="{{ url('/login') }}">Login</a>
                            </div>
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
