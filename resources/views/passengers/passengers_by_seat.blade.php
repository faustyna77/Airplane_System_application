<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Passenger by Seat Number</title>
</head>
<body>
    <h1>Search Passenger by Seat Number</h1>
    <form method="GET" action="{{ route('passengers.searchBySeatNumber') }}">
        <label for="seat_number">Enter Seat Number:</label>
        <input type="text" id="seat_number" name="seat_number" required>
        <button type="submit">Search</button>
    </form>

    @if(isset($passengers))
        <h2>Passengers with Seat Number {{ $seat_number }}</h2>
        @if(count($passengers) > 0)
            <ul>
                @foreach ($passengers as $passenger)
                    <li>
                        <strong>ID:</strong> {{ $passenger->passenger_id }},
                        <strong>Name:</strong> {{ $passenger->name }},
                        <strong>Surname:</strong> {{ $passenger->surname }},
                        <strong>Seat Number:</strong> {{ $passenger->seat_number }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>No passengers found with seat number {{ $seat_number }}</p>
        @endif
    @endif
</body>
</html>
