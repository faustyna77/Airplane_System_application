

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Rezerwacje</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Pasazera</th>
                <th scope="col">ID Adres</th>
                <th scope="col">ID Flight</th>
                <th scope="col">ID statusu rezerwacji</th>
                <th scope="col">Bagaż</th>
                <th scope="col">Miejsce</th>
                <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $booking)
                <tr>
                    <td>{{ $booking->passenger_id }}</td>
                    <td>{{ $booking->adres_id }}</td>
                    <td>{{ $booking->flight_id }}</td>
                    <td>{{ $booking->status_reservation_id }}</td>
                    <td>{{ $booking->baggage }}</td>
                    <td>{{ $booking->place }}</td>
                    <td>
                        <a href="{{route('booking.edit',$booking->booking_id)}}" class="btn btn-primary btn-sm">Edytuj</a>
                        <form method="POST" action="{{ route('booking.destroy', $booking->booking_id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Brak rezerwacji.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('booking.create') }}" class="btn btn-success">Wprowadź dane nowej rezerwacji</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
