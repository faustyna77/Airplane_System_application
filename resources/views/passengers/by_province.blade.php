<!-- passengers_by_province.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passengers by Province</title>
</head>
<body>
    <h1>Passengers from {{ $province }}:</h1>
    <ul>
        @foreach($passengers as $passenger)
            <li>{{ $passenger->name }} {{ $passenger->surname }}</li>
        @endforeach
    </ul>
</body>
</html>
