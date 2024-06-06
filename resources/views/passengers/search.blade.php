<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Passengers by Province</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-bottom: 5px;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            width: 100%;
            max-width: 400px;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f8f9fa;
            padding: 10px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Search Passengers by Province</h1>
        <form method="GET" action="{{ route('passengers.search') }}">
            <label for="province">Województwo:</label>
            <input type="text" id="province" name="province">
            <button type="submit">Szukaj</button>
        </form>

        @if(isset($passengers))
            <h2>Passengers in {{ $province }}</h2>
            <ul>
                @foreach ($passengers as $passenger)
                    <li>{{ $passenger->name }} {{ $passenger->surname }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
