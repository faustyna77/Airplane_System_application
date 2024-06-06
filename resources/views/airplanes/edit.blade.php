<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edycja rekordu</h3>

    <form method="POST" action="{{route('airplane.update', $airplane->airplane_id) }}">
        @csrf
        @method('PUT')
        <label for="producer"> Producent </label>
        <input type="text" name="producer" value="{{$airplane->producer}}">
        <label for="type">Typ </label>
        <input type="text" name="type" value="{{$airplane->type}}">
       
        <button type="submit">Zapisz zmiany</button>
    </form>
</body>
</html>
