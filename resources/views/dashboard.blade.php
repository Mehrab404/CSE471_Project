<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        .results-box {
            margin-top: 30px;
            padding: 20px;
            background-color: #0d3108;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #61b7e2;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .no-results {
            text-align: center;
            color: #999;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Welcome back to Melodex!!! {{ auth()->user()->name }}!</h1>

       
        <form action="/search" method="GET">
            @csrf
            <input type="text" name="query" placeholder="Search for an artist, album, or song..." required>
            <button type="submit">Search</button>
        </form>

        
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
        
        @if(isset($results))
        <div class="results">
            <h2>Search Results:</h2>
            @if(count($results) > 0)
                <table>
                    <thead>
                        <tr>
                           
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Album</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $result)
                        <tr>
                            
                            <td>{{ $result->Song }}</td>
                            <td>{{ $result->Artist }}</td>
                            <td>{{ $result->Album }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No results found.</p>
            @endif
        </div>
        @endif
    </div>

</body>
</html>