<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Zapisz dane lotu</h3>
    <form method="POST" action="{{ route('flight.store') }}">
    @csrf
    <label for="departure_date">Wprowadź datę odlotu</label>
    <input type="date" name="departure_date">
   
    <label for="airplane_id">Wprowadź ID samolotu</label>
    <input type="number" name="airplane_id">
    
   
    
    <button type="submit">Dodaj</button>
    </form>
</body>
</html>
