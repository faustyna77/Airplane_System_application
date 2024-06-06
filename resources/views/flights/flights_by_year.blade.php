<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights by Year</title>
</head>
<body>
    <h1>Flights by Year</h1>
    <form method="GET" action="{{ route('flights.flights_by_year') }}">
        <label for="year">Enter Year:</label>
        <input type="text" id="year" name="year">
        <button type="submit">Search</button>
    </form>
    
    @if(isset($flights))
        <h2>Flights in {{ $year }}</h2>
        <ul>
            @foreach ($flights as $flight)
                <li>{{ $flight->departure_date }} {{$flight->flight_id}} {{$flight->airplane_id}}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
