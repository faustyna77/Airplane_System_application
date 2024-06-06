<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Passengers by Province</title>
</head>
<body>
    <h1>Search Passengers by Province</h1>
    <form action="{{ route('passengers.by_province') }}" method="GET">
        @csrf
        <label for="wojewodztwo">Enter Province:</label><br>
        <input type="text" id="wojewodztwo" name="wojewodztwo"><br>
        <button type="submit">Search</button>
    </form>
</body>
</html>
