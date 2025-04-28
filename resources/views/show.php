<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug List</title>
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
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px; /* تكبير عرض المستطيل */
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .drug-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .drug-item {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .drug-item h2 {
            margin: 0;
            color: #333;
            flex: 1; /* إضافة مرونة لتحريك النص بعيدًا عن الأزرار */
            text-align: left;
        }

        .drug-item p {
            margin: 0;
            color: #777;
        }

        .drug-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 12px; /* تصغير حجم الأزرار */
            border-radius: 5px;
            border: none;
            cursor: pointer;
            color: white;
            font-size: 14px; /* تصغير حجم النص داخل الأزرار */
            text-decoration: none;
        }

        .btn-edit {
            background-color: #3498db; /* زر التعديل باللون الأزرق */
        }

        .btn-view {
            background-color: #2ecc71; /* زر عرض الوصف باللون الأخضر */
        }

        .btn-delete {
            background-color: #e74c3c; /* زر الحذف باللون الأحمر */
        }

        .no-drugs-message {
            color: #e74c3c;
            font-size: 18px;
        }

        /* تأكيد الحذف */
        .confirm-box {
            background-color: wheat; /* خلفية بيضاء */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none; /* سيتم إظهاره فقط عند النقر على الحذف */
            width: 450px; /* زيادة حجم المستطيل الأبيض */
        }

        .confirm-box p {
            color: #333;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .confirm-box .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            color: white;
            font-size: 14px;
        }

        .btn-confirm {
            background-color: #27ae60; /* لون زر التأكيد */
        }

        .btn-cancel {
            background-color: #3498db; /* لون زر الإلغاء */
        }

        /* زر الرجوع لواجهة الأدمن */
        .btn-admin {
            background-color: #f39c12; /* لون زر الرجوع للأدمن */
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Drug List</h1>

    <?php
    // هنا يجب أن تحصل على مجموعة الأدوية من قاعدة البيانات
    // لنفترض أن لديك متغير $drugs يحتوي على الأدوية

    if ($drugs->isEmpty()) {
        echo '<p class="no-drugs-message">There are no drugs available.</p>';
    } else {
        echo '<ul class="drug-list">';
        foreach ($drugs as $drug) {
            echo '<li class="drug-item">';
            echo '<div>';
            echo '<h2>' . htmlspecialchars($drug->name) . '</h2>'; // تأكد من الهروب من أي نص لإبعاد الأخطاء
            echo '<p>Price: $' . number_format($drug->price, 2) . '</p>';
            echo '</div>';
            echo '<div class="drug-actions">';
            // زر عرض الوصف
            echo '<a href="/description/'.$drug->id.'" class="btn btn-view">View Description</a>';
            // زر التعديل
            echo '<a href="/editPage/'.$drug->id.'" class="btn btn-edit">Edit Price</a>';
            // زر الحذف
            echo '<a href="/delete/'.$drug->id.'" class="btn btn-delete">Delete</a>';
 
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>
<br>

<a href="/welcomeAdmin" class="btn btn-admin">Back to Admin Dashboard</a>
    
</div>


