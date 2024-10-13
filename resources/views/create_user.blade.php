<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #FFB6C1 0%, #FF69B4 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1),
                        0 0 20px rgba(255, 105, 180, 0.3);
            width: 350px;
            position: relative;
            z-index: 1;
        }
        .logo {
            width: 100px;
            height: 100px;
            position: absolute;
            top: -20px;
            left: -20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #FF69B4;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #FF69B4;
            font-weight: 500;
        }
        input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 2px solid #FFB6C1;
            border-radius: 12px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #FF69B4;
            box-shadow: 0 0 0 3px rgba(255, 105, 180, 0.2);
        }
        input[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #FF69B4;
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.1s ease;
        }
        input[type="submit"]:hover {
            background-color: #FF1493;
        }
        input[type="submit"]:active {
            transform: scale(0.98);
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="">
            <img src="/asset/images/kiyowo.png"  class="logo">
        </div>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <h1>Create User</h1>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" required>
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>