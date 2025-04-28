<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Homepage</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffeb3b; /* لون الخلفية الأصفر */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff; /* اللون الأبيض للمستطيل */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            display: block;
            width: 283px;
            padding: 10px;
            margin: 10px 0;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            font-size: 16px;
            color: white;
        }

        .btn-login {
            background-color: #f1c40f;
        }

        .btn-create-account {
            background-color: #27ae60;
        }

        .btn-admin {
            background-color: #3498db;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to the Pharmacy</h1>
    <a href="/loginPage" class="btn btn-login">Login</a>
    <a href="/registerPage" class="btn btn-create-account">Create Account</a>
    <a href="/adminPage" class="btn btn-admin">Admin</a>
</div>

</body>
</html>
