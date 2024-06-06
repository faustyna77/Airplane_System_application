<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking edit</title>
</head>
<body>
    <h3>Edycja rekordu</h3>

    <form method="POST" action="{{route('booking.update', $booking->booking_id) }}">
        @csrf
        @method('PUT')
        <label for="passenger_id">ID_pasażer</label>
        <input type="number" name="passenger_id" value="{{$booking->passenger_id}}">
        <label for="adres_id">ID Adres </label>
        <input type="number" name="adres_id" value="{{$booking->adres_id}}">
        <label for="flight_id">ID lotu</label>
        <input type="number" name="flight_id" value="{{$booking->flight_id}}">
        <label for="status_reservation_id">ID statusu rezerwacji </label>
        <input type="number" name="status_reservation_id" value="{{$booking->status_reservation_id}}">
        <label for="baggage">Bagaż </label>
        <input type="text" name="baggage" value="{{$booking->baggage}}">
        <label for="place">miejsce  </label>
        <input type="text" name="place" value="{{$booking->place}}">
        <button type="submit">Zapisz zmiany</button>
    </form>
</body>
</html>
