<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Detection</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($base_url . '/static/styles.css'); ?>">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF; /* Warna primary biru */
            color: white;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 36px;
            margin: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        img {
            border: 5px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.5); /* Warna bayangan biru */
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }
        img:hover {
            transform: scale(1.05);
        }
        a {
            text-decoration: none;
            background-color: #007BFF; /* Warna primary biru */
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #0056b3; /* Warna biru lebih gelap */
        }
    </style>
</head>
<body>
    <header>
        <h1>Face Detection System</h1>
    </header>
    <div class="container">
        <!-- Tampilan video streaming -->
        <img src="<?php echo htmlspecialchars($base_url . '/video_feed.php'); ?>" alt="Video Feed" width="640" height="480">
        
        <!-- Link ke halaman deteksi wajah unik -->
        <a href="<?php echo htmlspecialchars($base_url . '/show_detections.php'); ?>">Lihat Detail</a>
    </div>
</body>
</html>
