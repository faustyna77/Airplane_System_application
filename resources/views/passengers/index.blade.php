<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Pasażerowie</h2>
    <a href="{{ route('adres.index') }}" class="btn btn-success">Najpierw Wprowadź adres pasażera</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Pesel</th>
                <th scope="col">Telefon</th>
                <th scope="col">Email</th>
                <th scope="col">Adres ID</th>
                <th scope="col">Akcje</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($passengers as $passenger)
                <tr>
                    <td>{{ $passenger->name }}</td>
                    <td>{{ $passenger->surname }}</td>
                    <td>{{ $passenger->pesel_number }}</td>
                    <td>{{ $passenger->phone }}</td>
                    <td>{{ $passenger->email }}</td>
                    <td>{{ $passenger->adres_id }}</td>
                    <td>
                        <a href="{{route('passenger.edit',$passenger->passenger_id)}}" class="btn btn-primary btn-sm">Edytuj</a>
                        <form method="POST" action="{{ route('passenger.destroy', $passenger->passenger_id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Brak pasażerów.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('passenger.create') }}" class="btn btn-success">Wprowadź dane nowego pasażera</a>
    <a href="{{ route('passengers.search') }}">Wyszukaj pasażerów po województwie</a>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
