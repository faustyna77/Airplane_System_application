<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles/page.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .video-container {
    position:relative;
    width: 100%;
    height: 100vh; 
}

.video-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; /* Ustaw wysokość na 100% */
    object-fit: cover; /* Zapewnia, że video zostanie proporcjonalnie dopasowane do kontenera */
    z-index: -1; /* Umieść video za innymi elementami */
}

        .card {
            background-color: rgba(255, 255, 255, 0.5); /* Transparent background for cards */
            border: none;
            margin-bottom: 20px;
            position: relative;
            z-index: 1; /* Ensure cards are on top of the video */
            padding-right: 5px; /* Zmniejsz padding z prawej strony */
    padding-left: 5px; /* Zmniejsz padding z lewej strony */
    margin-right: auto; /* Ustaw margines z prawej strony na auto */
    margin-left: auto;
        }

        /* Nowy styl dla nawigacji */
        .navbar {
            background-color: rgba(255, 255, 255, 0.7); /* Transparent background for navbar */
            position: relative;
            z-index: 1; /* Ensure navbar is on top of the video */
        }

        .container {
    padding-right: 5px; /* Zmniejsz padding z prawej strony */
    padding-left: 5px; /* Zmniejsz padding z lewej strony */
    margin-right: auto; /* Ustaw margines z prawej strony na auto */
    margin-left: auto; /* Ustaw margines z lewej strony na auto */
}

.row {
    margin-right: -5px; /* Zmniejsz margines z prawej strony */
    margin-left: -5px; /* Zmniejsz margines z lewej strony */
}
    </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          
          
        
          
          
        </ul>
      </div>
    </div>
  </nav>
  

  <div class="video-container">
    <video autoplay muted loop class="video-background">
      <source src="video/23857-337674800_medium.mp4" type="video/mp4">
    </video>
  
    <div class="container mt-5">
      <div class="row text-center">
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Zarejestruj nowego pasażera</h5>
              <p class="card-text">Kliknij tutaj w celu dokonania rejestracji.</p>
              <a href="{{route('passengers.index')}}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rezerwacje</h5>
              <p class="card-text">Wypełnij szczegóły dotyczące rejestracji.</p>
              <a href="{{route('booking.index')}}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Wybierz samolot oraz datę lotu</h5>
              <p class="card-text">Uzupełnij dane dotyczące odlotu oraz przylotu.</p>
              <a href="{{route('airplanes.index')}}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Znajdź pasażera po numerze lotu </h5>
              <p class="card-text">Wprowadź numer lotu w celu identyfikacji pasażera</p>
              <a href="{{route('passengers.details.by.flight') }}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liczba bagażów  </h5>
              <p class="card-text">Znajdż pasażerów po ich liczbie bagażu </p>
              <a href="{{route('passengers.by.baggage') }}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>


        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sprawdź status swojej rezerwacji</h5>
              <p class="card-text">Wejdź tutaj, aby podglądnąć swoją rezerwację.</p>
              <a href="{{route('status_reservation.index')}}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>

        <!-- Nowe przyciski -->
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Znajdź pasażera po jego adresie zameldowania</h5>
              <p class="card-text">Wyszukaj pasażera na podstawie jego województwa</p>
              <a href="{{route('passengers.search')}}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Znajdź loty z wybranej daty</h5>
              <p class="card-text">Wyszukaj loty na podstawie daty.</p>
              <a href="{{route('flights.flights_by_date')}}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>
        

        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Aktualizuj nazwisko pasażera</h5>
              <p class="card-text">Zmień nazwisko wybranego pasażera</p>
              <a href="{{route('passenger.updateSurname')}}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Znajdz pasazera po jego numerze pesel </h5>
              <p class="card-text"></p>
              <a href="{{route('passengers.searchByPesel')}}" class="btn btn-primary">Wybierz</a>
            </div>
          </div>
        </div>
        <!-- Koniec nowych przycisków -->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



