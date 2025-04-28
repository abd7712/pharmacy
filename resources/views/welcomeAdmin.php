<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Admin Dashboard</title>
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
            margin-bottom: 10px;
            color: #333;
        }

        .container p {
            margin-bottom: 20px;
            font-size: 18px;
            color: #555;
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

        .btn-add-drug {
            background-color: #f39c12; /* لون الزر البرتقالي */
        }

        .btn-view-drugs {
            background-color: #2ecc71; /* لون الزر الأخضر */
        }

        .btn-admin {
            background-color: #3498db; /* لون الزر الأزرق */
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to the Pharmacy</h1>
    <p>Welcome, Admin!</p> <!-- عبارة الترحيب بالإدارة -->
    
    <a href="/createPage" class="btn btn-add-drug">Add Drug</a> <!-- زر لإضافة دواء -->
    <a href="/show" class="btn btn-view-drugs">View Drugs</a> <!-- زر لعرض الأدوية -->
    <a href="/" class="btn btn-admin">Back to Homepage</a> <!-- زر لوحة تحكم الإدارة -->
</div>

</body>
</html>
