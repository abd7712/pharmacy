<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Description</title>
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
            width: 400px; /* زيادة عرض المستطيل */
        }

        .container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .description-text {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
        }

        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            color: white;
            background-color: #3498db; /* اللون الأزرق */
            cursor: pointer;
        }

        .btn-back:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>{{ $drug->name }} Description</h1>
    
    <p class="description-text">{{ $drug->description }}</p> <!-- عرض وصف الدواء -->

    <!-- زر العودة إلى قائمة الأدوية أو واجهة الأدمن -->
    
    <a href="/showC/{{$user->id}}" class="btn-back">Back to show Dashboard</a>

</div>

</body>
</html>