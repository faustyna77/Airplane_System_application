<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Airplane Producer</title>
</head>
<body>
    <h1>Search Airplane Producer</h1>
    <form action="{{ route('airflights.departure') }}" method="GET">
        <label for="id_airplaneflight">Enter airplane type:</label>
        <input type="number" id="airplaneflight" name="airplaneflight">
        <button type="submit">Search</button>
    </form>
</body>
</html>
