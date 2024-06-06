<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samoloty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #dee2e6;
        }
        .btn {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Samoloty</h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Producent</th>
                        <th>Typ</th>
                        <th>Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($airplanes as $airplane)
                        <tr>
                            <td>{{ $airplane->producer }}</td>
                            <td>{{ $airplane->type }}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <form method="POST" action="{{ route('airplane.destroy', $airplane->airplane_id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                                    </form>
                                    <a href="{{ route('airplane.edit', $airplane->airplane_id) }}" class="btn btn-primary btn-sm">Edytuj</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Brak samolotów</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('airplane.create') }}" class="btn btn-success">Wprowadź dane nowego samolotu</a>
            <a href="{{ route('flights.index') }}" class="btn btn-info">Wyświetl lub wprowadź lot</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
