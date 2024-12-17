<html lang="en">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #cee5f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #61b7e2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #61b7e2;
        }
    </style>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Melodex</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Melodex!!!</h1>
        <br>
        <a href="{{ route('register') }}" style="display: block; margin-bottom: 10px;">
            <button>Register</button>
        </a>
        <a href="{{ route('login') }}" style="display: block;">
            <button>Login</button>
        </a>
    </div>

</body>
</html>