<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasazerowie według liczby bagaży</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
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
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            width: 100%;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        ul {
            padding-left: 0;
            list-style: none;
        }
        li {
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: #f8f9fa;
        }
        .alert {
            text-align: center;
            margin-top: 20px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pasazerowie według liczby bagaży</h1>
        <form method="GET" action="{{ route('passengers.by.baggage') }}">
            <label for="baggage_count">Liczba bagaży:</label>
            <input type="number" id="baggage_count" name="baggage_count" value="{{ request('baggage_count') }}">
            <button type="submit">Szukaj</button>
        </form>

        @if(isset($passengers) && count($passengers) > 0)
            <h2>Pasażerowie z {{ $baggageCount }} bagażami</h2>
            <ul>
                @foreach ($passengers as $passenger)
                    <li>{{ $passenger->name }} {{ $passenger->surname }} - Bagaże: {{ $passenger->baggage }}</li>
                @endforeach
            </ul>
        @else
            <div class="alert">
                Nie znaleziono pasażerów z podaną liczbą bagaży.
            </div>
        @endif
    </div>
</body>
</html>
