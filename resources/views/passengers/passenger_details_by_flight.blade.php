<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły pasażerów według lotu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        .form-label {
            margin-right: 10px;
        }
        .form-input {
            margin-right: 10px;
        }
        .btn-submit {
            margin-top: 10px;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        ul li {
            padding: 10px;
            border: 1px solid #dee2e6;
            margin-bottom: 5px;
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Szczegóły pasażerów według lotu</h1>
        <form method="GET" action="{{ route('passengers.details.by.flight') }}" class="d-flex justify-content-center">
            <div class="form-group">
                <label for="flight_id" class="form-label">ID lotu:</label>
                <input type="text" id="flight_id" name="flight_id" class="form-control form-input" value="{{ request('flight_id') }}">
            </div>
            <button type="submit" class="btn btn-primary btn-submit">Szukaj</button>
        </form>

        @if(isset($passengers) && count($passengers) > 0)
            <h2>Pasażerowie w locie {{ $flightId }}</h2>
            <ul>
                @foreach ($passengers as $passenger)
                    <li>{{ $passenger->name }} {{ $passenger->surname }} - {{ $passenger->wojewodztwo }}, {{ $passenger->powiat }}, {{ $passenger->miejscowosc }}, {{ $passenger->ulica }} {{ $passenger->numer_domu }}/{{ $passenger->numer_lokalu }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-center">Nie znaleziono pasażerów dla tego lotu.</p>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
