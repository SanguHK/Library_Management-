<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 350px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }

        .login-header {
            background-color: #FFC107;
            border-radius: 15px;
            padding: 10px;
            margin: 0px 0px 15px 5px;
            font-size: 20px;
            font-weight: bold;
            color: #000;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .form-group input {
            width: 90%;
            padding: 10px 10px 10px 40px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 25px;
            outline: none;
        }

        .form-group .icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #FFC107;
            font-size: 18px;
        }

        .login-button {
            background-color: #FFC107;
            color: #fff;
            font-size: 14px;
            padding: 8px 15px; /* Smaller padding */
            border: none;
            border-radius: 25px;
            cursor: pointer;
            display: inline-block;
            text-align: center;
        }

        .login-button:hover {
            background-color: #ffa000;
        }

        .login-header h3 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .marquee {
            margin: 10px 0px;
            font-size: 20px;
            color: #fff;
            font-weight: 600;
        }

        /* Center the button */
        .form-group-button {
            text-align: center; /* Center the button container */
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h3 style="color:#fff">Student Login</h3>
        </div>
        <form action="login_server_page.php" method="get">
            <div class="form-group">
                <span class="icon">&#128100;</span>
                <input type="email" name="login_email" placeholder="Your Email *" required />
            </div>
            <div class="form-group" style="margin-top:25px;">
                <span class="icon">&#128274;</span>
                <input type="password" name="login_pasword" placeholder="Your Password *" required />
            </div>
            <div class="form-group-button">
                <input type="submit" class="login-button" value="Login" />
            </div>
        </form>
    </div>
</body>
</html>
