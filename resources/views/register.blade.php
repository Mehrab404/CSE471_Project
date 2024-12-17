<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodex</title>
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
<body>
    
    @auth
     <h1>Welcome to the dashboard!!!</h1> 
        <form action="logout", method="POST">
            @csrf
            <button type="submit">Log Out</button>
         </form>
        
     
    @else
    <div class="container">
        <h1>Registration Form</h1>
        <form action="/registersubmit" method="POST">
                 @csrf
                 <input type="text" name="name" placeholder="Name" required>
                 <input type="email" name="email" placeholder="Email" required>
                 <input type="password" name="password" placeholder="Password" required>
                 <input type="password" name="password_confirmation" placeholder="Confirm Password" required>           
                <button type="submit">Register</button>        
        </form>
        </div>
    @endauth



</body>
</html>