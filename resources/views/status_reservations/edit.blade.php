<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('status_reservation.update',$statusReservation->ID_reservation_status)}}">
    @csrf
    @method("PUT")
  
    <label for="reservation_state">Rezerwacji status</label>

    <input type="text" name="reservation_state" value="{{$statusReservation->reservation_state}}">
    <button type="submit">Zapisz zmiany</button>

    </form>

</body>
</html>