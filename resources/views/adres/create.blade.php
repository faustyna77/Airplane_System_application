<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{ route('adres.store') }}" method="POST">
    @csrf

    <label for="wojewodztwo">Województwo:</label>
    <input type="text" name="wojewodztwo">
    <label for="powiat">Powiat:</label>
    <input type="text" name="powiat">
    <label for="miejscowosc">Miejscowosc:</label>
    <input type="text" name="miejscowosc">
    <label for="ulica">Ulica:</label>
    <input type="text" name="ulica">
    <label for="numer_domu">Numer domu:</label>
    <input type="text" name="numer_domu">
    <label for="numer_lokalu">Numer lokalu:</label>
    <input type="text" name="numer_lokalu">
   

    <button type="submit">Dodaj adres</button>
</form>
</body>
</html>