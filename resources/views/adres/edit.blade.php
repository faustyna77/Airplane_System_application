<!-- Formularz edycji adresu -->
<form method="POST" action="{{ route('adres.update', $adres->adres_id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="wojewodztwo">Województwo:</label>
        <input type="text" class="form-control" id="wojewodztwo" name="wojewodztwo" value="{{ $adres->wojewodztwo }}">

        <label for="powiat">Powiat:</label>
        <input type="text" class="form-control" id="powiat" name="powiat" value="{{ $adres->powiat }}">

        <label for="miejscowosc">Miejscowowsc:</label>
        <input type="text" class="form-control" id="miejscowosc" name="miejscowosc" value="{{ $adres->miejscowosc }}">
        <label for="ulica">Ulica:</label>
        <input type="text" class="form-control" id="ulica" name="ulica" value="{{ $adres->ulica }}">
        <label for="numer_domu">Numer domu:</label>
        <input type="text" class="form-control" id="numer_domu" name="numer_domu" value="{{ $adres->numer_domu }}">
        <label for="numer_lokalu">Numer lokalu:</label>
        <input type="text" class="form-control" id="numer_lokalu" name="numer_lokalu" value="{{ $adres->numer_lokalu }}">
        
    </div>
    <!-- Pozostałe pola formularza -->
    <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
</form>
