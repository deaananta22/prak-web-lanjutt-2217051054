<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .card {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        width: 350px;
        text-align: center;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
    }

    .card::before {
        content: '';
        position: absolute;
        top: -50px;
        left: -50px;
        width: 150px;
        height: 150px;
        background: radial-gradient(circle, #ff69b4, #ff1493);
        opacity: 0.2;
        z-index: 0;
        border-radius: 50%;
    }

    .card::after {
        content: '';
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 150px;
        height: 150px;
        background: radial-gradient(circle, #ff69b4, #ff1493);
        opacity: 0.2;
        z-index: 0;
        border-radius: 50%;
    }

    h1.label {
        color: #333;
        margin-bottom: 10px;
        font-size: 24px;
        z-index: 1;
        position: relative;
    }

    .ipk {
        color: #666;
        font-size: 20px;
        margin-bottom: 20px;
        z-index: 1;
        position: relative;
    }

    </style>
</head>
<body>
    <div class="card">
        <div class="info">
            <h1 class="label">{{ $user->nama }}</h1>
            <h1 class="ipk">{{ number_format($user->ipk, 2) }}</h1>
        </div>
    </div>
</body>
</html>
