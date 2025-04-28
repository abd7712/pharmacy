<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            width: 282px;
        }

        .message {
            color: #333;
            font-size: 14px;
            margin-top: 20px;
        }
        
        .link {
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
        }

        .link:hover {
            text-decoration: underline;
        }

        .message1 {
            color: red;
            margin: 10px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Login</h1>
    
    <form action="/login" method="get"> <!-- تغيير المسار هنا حسب الحاجة -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <input type="submit" class="btn" value="Login">
    </form>
    
    <div class="message">
        If you don't have an account: 
        <a href="/registerPage" class="link">Create one</a> <!-- رابط لإنشاء حساب -->
    </div>
    
    <!-- زر العودة إلى الصفحة الرئيسية -->
    <a href="/" class="btn btn-back">Back to Home Page</a>
    <?php
        // افترض أن هناك متغير $message تم تعيينه في حال كانت كلمة المرور غير صحيحة
        if(isset($message) && !empty($message)) {
            echo '<div class="message1">' . htmlspecialchars($message) . '</div>';
        }
    ?>
</div>

</body>
</html>
