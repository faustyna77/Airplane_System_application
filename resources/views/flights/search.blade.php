<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Airplane Producer</title>
</head>
<body>
    <h1>Search Airplane Producer</h1>
    <form action="{{ route('flights.departure') }}" method="GET">
        <label for="ID_flight">Enter airplane type:</label>
        <input type="number" id="ID_flight" name="ID_flight">
        <button type="submit">Search</button>
    </form>
</body>
</html>
