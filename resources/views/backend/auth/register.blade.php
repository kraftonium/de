<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="keywords"
        content="practo clone, Divine Infoverse, doctor appointment, Practo clone html template, doctor booking template">
    <meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
    <meta property="og:url" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Doctors Appointment HTML Website Templates | Divine Infoverse">
    <meta property="og:description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta property="og:image" content="backend-assets/img/preview-banner.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta property="twitter:url" content="https://Divine Infoverse.dreamstechnologies.com/html/">
    <meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Divine Infoverse">
    <meta name="twitter:description"
        content="The responsive professional Divine Infoverse template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="twitter:image" content="backend-assets/img/preview-banner.jpg">
    <title>ERP - Divyashakti Enterprise</title>

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

                            <form action="login.html" style="padding-bottom: 10px !important;">

                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="email" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Phone">
                                </div>
                                <div class="mb-3 custom-date-container">
                                    <input id="dateInput" class="form-control custom-date" type="date"
                                        placeholder=" " />
                                    <label for="dateInput" class=" custom-placeholder">Date Of Birth</label>
                                </div>
                                <script>
                                    const dateInput = document.getElementById("dateInput");
                                    const label = document.querySelector(".custom-placeholder");
                                  
                                    dateInput.addEventListener("focus", function () {
                                      label.style.display = "none";
                                    });
                                  
                                    dateInput.addEventListener("blur", function () {
                                      if (!this.value) {
                                        label.style.display = "block";
                                      }
                                    });
                                  </script>


                                <div class="mb-3">
                                    <label for="fileInput" class="custom-file-upload form-control">
                                        Click to Upload Image
                                    </label>
                                    <input id="fileInput" class="file-input" type="file" accept="image/*">
                                    <p id="fileName" class="file-name">No file selected</p>
                                </div>
                                <script>
                                    document.getElementById("fileInput").addEventListener("change", function () {
                                        const fileName = this.files.length > 0 ? this.files[0].name : "No file selected";
                                        document.getElementById("fileName").textContent = fileName;
                                    });
                                </script>
                                <div class="mb-3 d-flex gap-2 px-2 flex-wrap"
                                    style="color: #595C5F; flex-direction: column;">
                                    <label for="male" style="color: #000;">Gender :</label>

                                    <div class="d-flex justify-content-between mb-1">
                                        <div>
                                            <input type="radio" id="male" name="option" value="Male">
                                            <label for="male">Male</label>
                                        </div>

                                        <div>
                                            <input type="radio" id="female" name="option" value="Female">
                                            <label for="female">Female</label>
                                        </div>

                                        <div>
                                            <input type="radio" id="other" name="option" value="Other">
                                            <label for="other">Other</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <textarea name="address" id="address" class="form-control" placeholder="Address"
                                        style="height: 4rem !important;"></textarea>
                                </div>
                                <div class="mb-3" style="position: relative;">
                                    <input id="passwordInput" class="form-control" type="password"
                                        placeholder="Password" style="padding-right: 40px;">
                                    <span id="togglePassword"
                                        style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                        <i class="fa-solid fa-eye"></i>
                                        <!-- Replace with your preferred icon library -->
                                    </span>
                                </div>
                                <div class="mb-3" style="position: relative;">
                                    <input id="repasswordInput" class="form-control" type="password"
                                        placeholder="Re-Password" style="padding-right: 40px;">
                                    <span id="togglerePassword"
                                        style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                        <i class="fa-solid fa-eye"></i>
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



                            <div class="text-center dont-have">Already have an account? <a href="login.html">Login</a>
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