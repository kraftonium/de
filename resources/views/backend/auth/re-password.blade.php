<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Change Password | Divyashakti Enterprise</title>

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
                            <h1> New Password</h1>
                            <p class="account-subtitle">Make your new password!!</p>

                            <form action="{{ url('/admin-reset-password-submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Enter Otp" name="otp">
                                    <span class="text-danger">
                                        @error('otp')
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
                                <div class="mb-3" style="position: relative;">
                                    <input id="repasswordInput" class="form-control" type="password"
                                        placeholder="Re-Password" style="padding-right: 40px;"
                                        name="password_confirmation">
                                    <span id="togglerePassword"
                                        style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                    <span class="text-danger">
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-0">
                                    <button class="btn auth-btn w-100" type="submit">Submit</button>
                                </div>
                            </form>
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

    <script>
        const passwordInput = document.getElementById("passwordInput");
        const togglePassword = document.getElementById("togglePassword");

        togglePassword.addEventListener("click", () => {
            // Toggle the input type between 'password' and 'text'
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);

            // Toggle the icon (replace with your icons if needed)
            if (type === "password") {
                togglePassword.innerHTML = '<i class="fa-solid fa-eye"></i>';
            } else {
                togglePassword.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
            }
        });



        const repasswordInput = document.getElementById("repasswordInput");
        const togglerePassword = document.getElementById("togglerePassword");

        togglerePassword.addEventListener("click", () => {
            // Toggle the input type between 'password' and 'text'
            const type = repasswordInput.getAttribute("type") === "password" ? "text" : "password";
            repasswordInput.setAttribute("type", type);

            // Toggle the icon (replace with your icons if needed)
            if (type === "password") {
                togglerePassword.innerHTML = '<i class="fa-solid fa-eye"></i>';
            } else {
                togglerePassword.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
            }
        });
    </script>
</body>

</html>
