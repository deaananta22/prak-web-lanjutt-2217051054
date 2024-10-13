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
            background: linear-gradient(135deg, #FFB6C1 0%, #FF69B4 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            padding: 0;
        
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        width: 400px;
        position: relative;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    input[type="file"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="file"]:focus,
    select:focus {
        border-color: #4CAF50;
        outline: none;
    }


    .btn1 {
        text-decoration: none;
        text-align: center;
        display: inline-block;
        width: 95%;
        padding: 10px;
        color: white;
        border-radius: 5px;
        margin-top: 10px;
        width: 100%;
        padding: 10px;
        background-color: #f67ebe;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .btn2 {
        background-color: #9f7cf0;
        text-decoration: none;
        text-align: center;
        display: inline-block;
        width: 95%;
        padding: 10px;
        color: white;
        border-radius: 5px;
        margin-top: 10px;
    }

    img.profile-img {
        display: block;
        margin-top: 10px;
        border-radius: 5px;
    }

    .logo {
             width: 150px;
            height: 150px;
            position: absolute;
            top: -60px;
            left: 325px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
    }

    a.btn {
        display: inline-block;
        margin-bottom: 15px;
        padding: 10px 20px;
        background-color: #9f7cf0;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    a.btn:hover {
        background-color: #8cf0a2;
    }

    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>