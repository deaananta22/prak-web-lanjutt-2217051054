<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Information</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('/asset/images/bg_dea.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
        }

        .card {
            background-color: rgba(255, 192, 203, 0.7);
            border-radius: 30px;
            padding: 30px;
            width: 300px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(255, 105, 180, 0.3),
                        0 0 30px rgba(255, 20, 147, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 40%;
            object-fit: cover;
            border: 6px solid #FFC0CB;
            box-shadow: 0 5px 15px rgba(255, 105, 180, 0.5);
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05) rotate(5deg);
            box-shadow: 0 8px 20px rgba(255, 20, 147, 0.6);
        }

        .info {
            width: 100%;
        }

        .label {
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 20px;
            background-color: rgba(255, 182, 193, 0.7);
            color: #FF1493;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(255, 105, 180, 0.2);
        }

        .label:hover {
            background-color: rgba(255, 105, 180, 0.8);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 20, 147, 0.4);
        }

        h1 {
            margin: 0;
            font-size: 1.2em;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            animation: fadeIn 0.8s ease-out, float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .hearts {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .heart {
            position: absolute;
            width: 20px;
            height: 20px;
            background: #FFC0CB;
            transform: rotate(45deg);
            animation: heartFloat 4s ease-in-out infinite, heartRotate 2s ease-in-out infinite;
        }

        .heart::before,
        .heart::after {
            content: '';
            width: 20px;
            height: 20px;
            background: #FFC0CB;
            border-radius: 50%;
            position: absolute;
        }

        .heart::before {
            left: -10px;
        }

        .heart::after {
            top: -10px;
        }

        @keyframes heartFloat {
            0% { transform: translateY(0) rotate(45deg); }
            50% { transform: translateY(-20px) rotate(45deg); }
            100% { transform: translateY(0) rotate(45deg); }
        }

        @keyframes heartRotate {
            0% { transform: rotate(45deg); }
            50% { transform: rotate(60deg); }
            100% { transform: rotate(45deg); }
        }
    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>   