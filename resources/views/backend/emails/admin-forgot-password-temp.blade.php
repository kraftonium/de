<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            /* max-width: 600px; */
            width: 100%;
            padding-top: 30px !important;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .otp-box {
            font-size: 22px;
            font-weight: bold;
            color: #ffffff;
            background: #007bff;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 20px 0;
        }

        .message {
            font-size: 16px;
            color: #555;
            margin: 20px 0;
        }

        .footer {
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        img {
            width: 200px;
            height: auto;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="/backend-assets/img/logo/logo-divyashakti.png" alt="Divyashakti Enterprise Logo">
        <div class="header">Forgot Your Password?</div>
        <p class="message">Use the OTP below to reset your password..</p>
        <div class="otp-box">{{ $fotp['Title'] }}</div>
        <p class="message">If you didn't request this, please ignore this email or contact support.</p>
        <div class="footer">
            Need help? <a href="mailto:contact@thedivyashakti.com">Contact Support</a><br>
            &copy; 2025 Divyashakti Enterprise
        </div>
    </div>
</body>

</html>
