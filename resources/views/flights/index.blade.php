<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Loty</h2>
 

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Data odlotu</th>
                <th scope="col">ID Samolotu</th>
                <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($flights as $flight)
                <tr>
                    <td>{{ $flight->departure_date }}</td>
                    <td>{{ $flight->airplane_id }}</td>
                    <td>
                        <a href="{{ route('flight.edit', $flight->flight_id) }}" class="btn btn-primary">Edytuj</a>
                        <form method="POST" action="{{ route('flight.destroy', $flight->flight_id) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Brak lotów.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('flight.create') }}" class="btn btn-primary">Wprowadź nowy lot</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
