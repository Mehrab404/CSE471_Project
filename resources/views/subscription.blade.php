<html lang="en">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        
        video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; 
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            z-index: 1; 
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
            background-color: #66128e;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #be7fdb;
        }

        a {
            text-decoration: none;
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
    <video autoplay muted loop>
        <source src="{{ asset('videos/purple.mp4') }}" type="video/mp4">
            Your browser does not support the video tag or the file is missing.
    </video>
    <div class="container">
        <h1>Subscription Packages</h1>

        @if(count($packages) > 0)
            @foreach($packages as $package)
                <div class="package">
                    <h3>{{ $package->Name }}</h3>
                    <p class="monthly rate">৳ {{ $package->Rate }}/month</p>
                    <p class="description">{{ $package->Description }}</p>
                    <button class="bkash-btn">Pay with Bkash</button>
                </div>
            @endforeach
        @else
            <p>No subscription packages available at the moment.</p>
        @endif
        <a href="{{ route('dashboard') }}" class="back-button">Back to Dashboard</a>
    </div>

</body>
</html>