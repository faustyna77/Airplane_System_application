<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- addresses.blade.php -->
@foreach ($addresses as $address)
    <p>{{ $address->address_id }}, {{ $address->wojewodztwo }}, {{ $address->miejscowosc }}, {{ $address->ulica }}</p>
@endforeach

</body>
</html>