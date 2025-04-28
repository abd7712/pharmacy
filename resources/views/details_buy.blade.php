<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Status</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffeb3b; /* Yellow background */
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
            text-align: center;
            width: 400px;
        }

        .container h1 {
            color: #4CAF50; /* Green text for success */
            margin-bottom: 20px;
        }

        .container p {
            color: #333;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .error {
            color: #e74c3c; /* Red color for error */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db; /* Back button color */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .details {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            text-align: left;
        }

        .details p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

    </style>
</head>
<body>

<div class="container">
    <!-- التحقق إذا كان هناك كائن دواء -->
    <?php if ($drug): ?>
        <h1>Details Of Your Purchase!</h1>
        <p>Thank you, your purchase has been completed successfully.</p>

        <!-- عرض تفاصيل الدواء المشترى -->
        <div class="details">
            <p><strong>Drug Name:</strong> <?php echo htmlspecialchars($drug->name); ?></p>
            <p><strong>Price:</strong> <?php echo htmlspecialchars($drug->price); ?> $</p>
            <p><strong>Purchase Date:</strong> <?php echo htmlspecialchars(date('Y-m-d')); ?></p>
        </div>
    <?php else: ?>
        <h1 class="error">Error in Purchase</h1>
        <p class="error">There was an issue with your purchase. Please try again later.</p>
    <?php endif; ?>

    <a href="/showC/{{$user->id}}" class="btn">Back to show page</a>
</div>

</body>
</html>


