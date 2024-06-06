<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Zapisz dane nowego pasażera</h3>
        <form method="POST" action="{{ route('passenger.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Imię</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Nazwisko</label>
                <input type="text" class="form-control" id="surname" name="surname">
            </div>
            <div class="mb-3">
                <label for="pesel_number" class="form-label">PESEL</label>
                <input type="text" class="form-control" id="pesel_number" name="pesel_number">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="adres_id" class="form-label">Adres ID</label>
                <input type="text" class="form-control" id="adres_id" name="adres_id">
            </div>
            <button type="submit" class="btn btn-primary">Dodaj</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-+YG9+RvtoZD4j1Dpt2hm3sbxaRf/1jpfm06yGkL5pu1Dr9Zl/CphfPJGk5FZsuDk" crossorigin="anonymous"></script>
</body>
</html>
