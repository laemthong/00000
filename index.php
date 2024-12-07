<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบด้วย Line - โรงพยาบาลบ้านไผ่</title>
    <link rel="icon" href="photo/รพ.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/auth.css">
    <style>
        :root {
            --primary-color: #2D5FA3;
            --hover-color: #1D4B87;
        }
        body {
            background: #f8f9fa;
            font-family: 'Sarabun', sans-serif;
        }
        #auth {
            min-height: 100vh;
        }
        .auth_logo {
            text-align: center;
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }
        .auth_logo:hover {
            transform: scale(1.05);
        }
        .auth_logo img {
            width: 120px;
            height: 120px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .auth-title {
            color: var(--primary-color);
            font-size: 2.2rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 0.5rem;
        }
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.8rem;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: var(--hover-color);
            border-color: var(--hover-color);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12 mx-auto">
                <div id="auth-left">
                    <div class="auth_logo">
                        <a href="index.php">
                            <img src="photo/รพ.png" alt="โรงพยาบาลบ้านไผ่" draggable="false">
                        </a>
                    </div>
                    <h1 class="auth-title">เข้าสู่ระบบด้วย Line</h1>
                    <p class="auth-subtitle mb-5">คลิกปุ่มด้านล่างเพื่อเข้าสู่ระบบ</p>
                    <a href="<?php
                        require_once('LineLogin.php');
                        $line = new LineLogin();
                        echo $line->getLink();
                    ?>" class="btn btn-primary btn-block btn-lg shadow-lg">
                        <i class="bi bi-chat-dots"></i> เข้าสู่ระบบด้วย Line
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>