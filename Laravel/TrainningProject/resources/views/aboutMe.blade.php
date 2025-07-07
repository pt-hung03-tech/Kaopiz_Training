<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phạm Tiến Hưng - Web Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;400&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background: rgba(255,255,255,0.08);
            border-radius: 24px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8px);
            padding: 48px 40px;
            max-width: 400px;
            text-align: center;
        }
        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            margin-bottom: 24px;
            box-shadow: 0 4px 16px rgba(30,60,114,0.2);
        }
        h1 {
            margin: 0 0 8px 0;
            font-size: 2.2rem;
            letter-spacing: 1px;
        }
        .role {
            font-size: 1.1rem;
            color: #b3c6e7;
            margin-bottom: 16px;
        }
        .info {
            margin: 18px 0;
            font-size: 1.05rem;
            line-height: 1.7;
        }
        .skills {
            margin-top: 24px;
        }
        .skill-badge {
            display: inline-block;
            background: #fff;
            color: #2a5298;
            border-radius: 16px;
            padding: 6px 16px;
            margin: 4px 6px;
            font-weight: bold;
            font-size: 0.98rem;
            box-shadow: 0 2px 8px rgba(42,82,152,0.08);
        }
    </style>
</head>
<body>
    <div class="card">
        <img class="avatar" src="https://ui-avatars.com/api/?name=Phạm+Tiến+Hưng&background=2a5298&color=fff&size=256" alt="Phạm Tiến Hưng Avatar">
        <h1>Phạm Tiến Hưng</h1>
        <div class="role">Web Developer</div>
        <div class="info">
            <strong>Sinh năm:</strong> 2003 <br>
            <strong>Vị trí:</strong> Web Developer <br>
        </div>
        <div class="skills">
            <span class="skill-badge">PHP (Laravel)</span>
            <span class="skill-badge">Vue.js</span>
        </div>
    </div>
</body>
</html>