<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #000000, #0f52ba, #b22222);
            background-size: 400% 400%;
            animation: gradientBG 12s ease infinite;
            color: white;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .profile-container {
            width: 350px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.5);
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0f52ba, #b22222);
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
            color: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }

        .info-box {
            background: rgba(255, 255, 255, 0.15);
            padding: 12px;
            margin: 12px 0;
            border-radius: 8px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: transform 0.3s, background 0.3s;
        }

        .info-box:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.25);
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="avatar">👤</div>
        <div class="info-box">Nama : {{ $nama }}</div>
        <div class="info-box">NIM : {{ $nim }}</div>
        <div class="info-box">Kelas : {{ $kelas }}</div>
    </div>
</body>
</html>
