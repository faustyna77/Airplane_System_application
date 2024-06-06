<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Passengers by Flight</title>
</head>
<body>
    <h1>Search Passengers by Flight</h1>
    <form method="GET" action="{{ route('passengers.by.flight') }}">
        <label for="flight_id">Flight ID:</label>
        <input type="text" id="flight_id" name="flight_id">
        <button type="submit">Search</button>
    </form>

    @if(isset($passengers))
        <h2>Passengers in Flight {{ $flightId }}</h2>
        <ul>
            @foreach ($passengers as $passenger)
                <li>{{ $passenger->name }} {{ $passenger->surname }} - {{ $passenger->adres }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
