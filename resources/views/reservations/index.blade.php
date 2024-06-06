<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Pasażerowie</h2>
<h3>cccc</h3>

<table>
    <thead>
        <tr>
            <th>Miejsce siedzenia</th>
            <th>Bagaż</th>
            <th>Numer pasażera</th>
            <th>Identyfikator adresu pasażera</th>
            <th>Numer lotu</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->sitting_place}}</td>
                <td>{{ $reservation->luggage }}</td>
                <td>{{ $reservation->ID_passenger }}</td>
                <td>{{ $reservation->ID_adres }} </td>
                <td>{{ $reservation->ID_flight}}</td>
                <td>{{ $reservation->ID_reservation_status }}</td>
                <td>
                    <a href="{{route('reservation.edit',$reservation->ID_reservation)}}">Edytuj</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('reservation.destroy', $reservation->ID_reservation) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Brak rezerwacji</td>
            </tr>
        @endforelse
    </tbody>
</table>

<a href="{{ route('reservation.create') }}"> <button type="submit" value="save">Wprowadź rezerwację </button></a>

</body>
</html>
