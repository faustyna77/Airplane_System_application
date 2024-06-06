<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edycja rekordu</h3>

    <form method="POST" action="{{route('passenger.update', $passenger->ID_passenger) }}">
        @csrf
        @method('PUT')
        <label for="name">Imie</label>
        <input type="text" name="name" value="{{$passenger->name}}">
        <label for="surname">Nazwisko </label>
        <input type="text" name="surname" value="{{$passenger->surname}}">
        <label for="pesel_number">Numer pesel </label>
        <input type="text" name="pesel_number" value="{{$passenger->pesel_number}}">
        <label for="phone">Telefon </label>
        <input type="text" name="phone" value="{{$passenger->phone}}">
        <label for="email">Email </label>
        <input type="text" name="email" value="{{$passenger->email}}">
        <button type="submit">Zapisz zmiany</button>
    </form>
</body>
</html>
