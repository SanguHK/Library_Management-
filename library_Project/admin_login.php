<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Lighter background */
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            width: 350px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }

        .login-header {
            background-color: #4CAF50; /* Green background */
            border-radius: 15px;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-bottom: 20px; /* Space between header and inputs */
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
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #4CAF50; /* Focus color */
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5); /* Shadow on focus */
        }

        .form-group .icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #4CAF50; /* Icon color */
            font-size: 18px;
        }

        .login-button {
            background-color: #4CAF50; /* Green background */
            color: #fff;
            font-size: 14px; /* Smaller font size */
            padding: 8px 15px; /* Smaller padding */
            border: none;
            border-radius: 25px;
            cursor: pointer;
            display: inline-block;
            margin-top: 15px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .login-button:hover {
            background-color: #45a049; /* Darker green on hover */
            transform: scale(1.05); /* Button slightly enlarges on hover */
        }

        .login-button:active {
            background-color: #388e3c; /* Even darker green on click */
        }

        .login-header h3 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .form-group-button {
            text-align: center; /* Center the button */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h3>Admin Login</h3>
        </div>
        <form action="loginadmin_server_page.php" method="get">
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
