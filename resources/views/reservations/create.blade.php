<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utwórz</title>
</head>
<body>
    <h3>Zapisz dane nowej rezerwacji </h3>
    <form method="POST" action="{{ route('reservation.store') }}">
    @csrf
    <label for="sitting_place">Wprowadź numer siedzenia</label>
    <input type="string" name="sitting_place>
   
    <label for="luggage">Wprowadź Bagaż</label>
    <input type="text" name="luggage">
    
    <label for="ID_passenger">ID Pasazera</label>
    <input type="number" name="ID_passenger">
    
    <label for="ID_adres">ID adres</label>
    <input type="number" name="ID_adres">
    
    <label for="ID_flight">ID lotu</label>
    <input type="number" name="ID_flight">
    <label for="ID_reservation_status">ID status rezerwacji</label>
    <input type="number" name="ID_reservation_status">
    
    <button type="submit">Dodaj</button>
    </form>
</body>
</html>
