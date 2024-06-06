<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edycja rekordu</h3>

    <form method="POST" action="{{route('flight.update', $flight->flight_id) }}">
        @csrf
        @method('PUT')
        <label for="departure_date">Data odlotu</label>
        <input type="date" name="departure_date" value="{{$flight->departure_date}}">
        <label for="airplane_id">ID samolotu </label>
        <input type="number" name="airplane_id" value="{{$flight->airplane_id}}">
        
        <button type="submit">Zapisz zmiany</button>
    </form>
</body>
</html>
