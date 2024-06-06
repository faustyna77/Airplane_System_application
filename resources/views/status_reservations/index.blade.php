<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Status rezerwacji</h2>
    <button> <a href="{{route('status_reservation.create')}}">Dodaj </a></button>
  

@forelse($statusReservations as $status)

<td>   {{$status->reservation_state}}</td>
<td>
<form method="POST" action="{{route('status_reservation.destroy',$status->status_reservation_id)}}">
    @csrf
    @method("DELETE")
    <button type="submit" value="Usuń"> Usuń rekord</button>
</form>

<a href="{{route('status_reservation.edit',$status->status_reservation_id)}}">Edit</a>




   

</td>

@empty
<td>brak elementów</td>

@endforelse


</body>
</html>