<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('status_reservation.store')}}">

    @csrf
    <label for="reservation_state">Status rezerwacji</label>
    <input type="text" name="reservation_state">
    <button type="submit" value="utwórz">Utwórz</button>
    
</form>
</body>
</html>