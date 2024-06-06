<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edycja</title>
</head>
<body>
    <h3>Edycja rekordu</h3>

    <form method="POST" action="{{route('reservation.update', $reservation->ID_reservation) }}">
        @csrf
        @method('PUT')
        <label for="sitting_place">Numer siedzenia</label>
        <input type="text" name="sitting_place" value="{{$reservation->sitting_place}}">
        <label for="luggage">Bagaż </label>
        <input type="text" name="luggage" value="{{$reservation->luggage}}">
        <label for="ID_passenger">ID pasażera</label>
        <input type="number" name="ID_passenger" value="{{$reservation->ID_passenger}}">
        <label for="ID_adres">ID Adres</label>
        <input type="number" name="ID_adres" value="{{$reservation->ID_adres}}">
        <label for="ID_flight">ID Lotu </label>
        <input type="number" name="ID_flight" value="{{$reservation->ID_flight}}">
        <label for="ID_reservation_status">ID statusu rezerwacji </label>
        <input type="number" name="ID_reservation_status" value="{{$reservation->ID_reservation_status}">
        <button type="submit">Zapisz zmiany</button>
    </form>
</body>
</html>
