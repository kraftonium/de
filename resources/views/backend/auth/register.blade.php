<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Divyashakti Enterprise</title>

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
                            <h1>Register</h1>
                            <p class="account-subtitle">Access to our dashboard</p>

                            <form action="{{ url('/register-submit') }}" style="padding-bottom: 10px !important;"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <!--<div class="mb-3">-->
                                <!--    <select class="form-control" name="usertype_id" id="usertype_id">-->
                                <!--        <option value="">Select User Type</option>-->
                                <!--        @foreach ($usertypes as $usertype)
-->
                                <!--            <option value="{{ $usertype->id }}"-->
                                <!--                @if (old('usertype_id') == $usertype->id)
selected
@endif>-->
                                <!--                {{ $usertype->usertype }}</option>-->
                                <!--
@endforeach-->
                                <!--    </select>-->
                                <!--    <span class="text-danger">-->
                                <!--        @error('usertype_id')
    -->
                                    <!--            {{ $message }}-->
                                    <!--
@enderror-->
                                <!--    </span>-->
                                <!--</div>-->

                                @if (Auth::user()->id == 1)
                                    <div class="mb-3">
                                        <select class="form-control" name="usertype_id" id="usertype_id">
                                            <option value="">Select User Type</option>
                                            @foreach ($usertypes as $usertype)
                                                <option value="{{ $usertype->id }}"
                                                    @if (old('usertype_id') == $usertype->id) selected @endif>
                                                    {{ $usertype->usertype }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('usertype_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                @else
                                    <input type="hidden" value="7" name="usertype_id" id="usertype_id">
                                @endif

                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Name" name="name"
                                        id="name" value="{{ old('name') }}">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="email" placeholder="Email" name="email"
                                        id="email" value="{{ old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Phone" name="phoneno"
                                        id="phoneno" maxlength="10" value="{{ old('phoneno') }}">
                                    <span class="text-danger">
                                        @error('phoneno')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3 custom-date-container">
                                    <input id="dateInput" class="form-control custom-date" type="date"
                                        placeholder=" " name="dob" id="dob" />
                                    <label for="dateInput" class=" custom-placeholder">Date Of Birth</label>
                                    <span class="text-danger">
                                        @error('dob')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <script>
                                    const dateInput = document.getElementById("dateInput");
                                    const label = document.querySelector(".custom-placeholder");

                                    dateInput.addEventListener("focus", function() {
                                        label.style.display = "none";
                                    });

                                    dateInput.addEventListener("blur", function() {
                                        if (!this.value) {
                                            label.style.display = "block";
                                        }
                                    });
                                </script>


                                <div class="mb-3">
                                    <label for="fileInput" class="custom-file-upload form-control">
                                        Click to Upload Image
                                    </label>
                                    <input id="fileInput" class="file-input" type="file" accept="image/*"
                                        name="image" id="image">
                                    <p id="fileName" class="file-name">No file selected</p>
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <script>
                                    document.getElementById("fileInput").addEventListener("change", function() {
                                        const fileName = this.files.length > 0 ? this.files[0].name : "No file selected";
                                        document.getElementById("fileName").textContent = fileName;
                                    });
                                </script>
                                <div class="mb-3 d-flex gap-2 px-2 flex-wrap"
                                    style="color: #595C5F; flex-direction: column;">
                                    <label for="male" style="color: #000;">Gender :</label>

                                    <div class="d-flex justify-content-between mb-1">

                                        <div>
                                            <input type="radio" id="female" name="gender" value="0"
                                                @if (old('gender') == '0') checked @endif>
                                            <label for="female">Female</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="male" name="gender" value="1"
                                                @if (old('gender') == '1') checked @endif>
                                            <label for="male">Male</label>
                                        </div>

                                        <div>
                                            <input type="radio" id="other" name="Gender" value="2"
                                                @if (old('gender') == '2') checked @endif>
                                            <label for="other">Other</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <textarea name="address" id="address" class="form-control" placeholder="Address" style="height: 4rem !important;"
                                        name="address">{{ old('address') }}</textarea>
                                    <span class="text-danger">
                                        @error('address')
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
                                    <button class="btn auth-btn w-100" type="submit">Register</button>
                                </div>
                            </form>

                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>



                            <div class="text-center dont-have">Already have an account? <a
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
