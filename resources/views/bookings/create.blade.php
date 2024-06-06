<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <form method="POST" action="{{ route('booking.store') }}">
        @csrf
        <div class="mb-3">
            <label for="passenger_id" class="form-label">ID Pasażera</label>
            <input type="number" class="form-control" id="passenger_id" name="passenger_id">
        </div>
        <div class="mb-3">
            <label for="adres_id" class="form-label">ID Adres</label>
            <input type="number" class="form-control" id="adres_id" name="adres_id">
        </div>
        <div class="mb-3">
            <label for="flight_id" class="form-label">ID Flight</label>
            <input type="number" class="form-control" id="flight_id" name="flight_id">
        </div>
        <div class="mb-3">
            <label for="status_reservation_id" class="form-label">ID Statusu</label>
            <input type="number" class="form-control" id="status_reservation_id" name="status_reservation_id">
        </div>
        <div class="mb-3">
            <label for="baggage" class="form-label">Bagaż</label>
            <input type="text" class="form-control" id="baggage" name="baggage">
        </div>
        <div class="mb-3">
            <label for="place" class="form-label">Numer Siedzenia</label>
            <input type="text" class="form-control" id="place" name="place">
        </div>
        <button type="submit" class="btn btn-primary">DODAJ</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-+YG9+RvtoZD4j1Dpt2hm3sbxaRf/1jpfm06yGkL5pu1Dr9Zl/CphfPJGk5FZsuDk" crossorigin="anonymous"></script>
</body>
</html>
