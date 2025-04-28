<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
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

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            font-size: 16px;
            color: white;
            background-color: #2ecc71; /* اللون الأخضر */
            cursor: pointer;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .btn-back {
            background-color: #3498db; /* لون أزرق */
            margin-top: 15px;
            width: 280px;
        }

        .message {
            color: red;
            margin: 10px 0;
            font-size: 14px;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Create Account</h1>
    
    <form action="/register" method="get">
       

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="form-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
        </div>

        <input type="submit" class="btn" value="Create Account">
    </form>
    
    <!-- زر العودة إلى صفحة تسجيل الدخول -->
    <a href="/" class="btn btn-back">Back to Home page</a>

    <?php
        // افترض أن هناك متغير $message تم تعيينه في حال كانت كلمة المرور غير صحيحة
        if(isset($message) && !empty($message)) {
            echo '<div class="message">' . htmlspecialchars($message) . '</div>';
        }
    ?>
</di1v>

</body>
</html>
