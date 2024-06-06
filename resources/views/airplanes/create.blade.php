<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airplane</title>
</head>
<body>
    <h3>Zapisz dane samolotu</h3>
    <form method="POST" action="{{ route('airplane.store') }}">
    @csrf
    <label for="producer">Wprowadź producenta</label>
    <input type="text" name="producer">
   
    <label for="type">Wprowadź typ</label>
    <input type="text" name="type">
    
    
    
    <button type="submit">Dodaj</button>
    </form>
</body>
</html>
