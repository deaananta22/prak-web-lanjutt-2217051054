<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List User</title>
    <style>

         body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #FFB6C1 0%, #FF69B4 100%);
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            position: relative;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .content-wrapper {
            background: linear-gradient(135deg, #f5d0fe, #c7d2fe, #ddd6fe);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            flex-direction: column;
            align-items: center;
            width: 50%;
            margin-top: 0px;
            position: relative; 
        }

        .btn-container {
            margin-bottom: 20px;
        }

        .btn-success {
            background-color: #8b5cf6;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #7c3aed;
        }

        .logo-container {
            position: absolute;
            top: -70px; 
            left: 750px; 
        }

        .logo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .table-container {
            width: 100%;
            max-width: 800px;
            overflow-x: auto;
            margin-top: 40px; 
        }

        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            overflow: hidden;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            text-align: left;
        }

        .table thead {
            background: linear-gradient(90deg, #d8b4fe, #a78bfa, #818cf8);
            color: white;
        }

        .table tbody tr:nth-child(even) {
            background-color: rgba(199, 210, 254, 0.3);
        }

        .table tbody tr:hover {
            background-color: rgba(221, 214, 254, 0.5);
        }

        .table-group-divider {
            border-top: 2px solid #8b5cf6;
        }
        
    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>