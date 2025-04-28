<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Password</title>
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

        .input-field {
            width: 280px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            display: block;
            width: 100%;
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
            width: 280px;
        }

        .btn-create-account {
            background-color: #27ae60;
        }

        .btn-admin {
            background-color: #3498db;
        }

        .btn-submit {
            background-color: #3498db; /* لون زر الإدخال */
        }

        .btn:hover {
            opacity: 0.9;
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
    <h1>Enter the password to log in</h1>
    <form action="/admin" method="get">
       
        <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
        <input type="submit" class="btn btn-submit" value="Submit">

    </form>
    <a href="/" class="btn btn-login">Back to Homepage</a>
    
    <!-- رسالة الخطأ (إذا كانت كلمة السر خاطئة) -->
    <?php
        // افترض أن هناك متغير $message تم تعيينه في حال كانت كلمة المرور غير صحيحة
        if(isset($message) && !empty($message)) {
            echo '<div class="message">' . htmlspecialchars($message) . '</div>';
        }
    ?>
    
</div>

</body>
</html>
