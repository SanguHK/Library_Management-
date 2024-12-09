<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('images/library.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .options {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            background-color: #4CAF50; /* Green background */
            color: white;
            font-size: 32px;
            padding: 15px 40px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #45a049; /* Darker green on hover */
            transform: scale(1.1); /* Slightly enlarge on hover */
        }

        .log-option {
            display: none;
            list-style-type: none;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .log-option li {
            padding: 10px;
            font-size: 24px;
            text-align: center;
            color: #333;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .log-option li:hover {
            background-color: #4CAF50; /* Green background on hover */
            color: white; /* Change text color */
        }

        .log-option a {
            color: inherit;
            text-decoration: none;
        }

        .row h4 {
            font-size: 18px;
            color: white;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>


<div class="container login-container">
    <div class="row">
        <div class="options">
            <button onclick="displays()">LOG-IN</button>
            <ul class="log-option">
                <a href="admin_login.php"><li>Admin</li></a>
                <a href="student_login.php"><li>Student</li></a>
            </ul>
        </div>
    </div>
</div>

<script>
    function displays() {
        const options = document.querySelector('.log-option');
        options.style.display = options.style.display === 'none' || options.style.display === '' ? 'block' : 'none';
    }
</script>

</body>
</html>
