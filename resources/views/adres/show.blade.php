

<body>

    <div class="container mt-5 mb-5">
        <div class="row mb-1">
            <h1>Kraj</h1>
        </div>
        <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th scope="col">Nazwa</th>
                    <td>{{ $adres->wojewodztwo }}</td>
                </tr>
                <tr>
                    <th scope="col">Kod</th>
                    <td>{{ $adres->powiat }}</td>
                </tr>
                <tr>
                    <th scope="col">Waluta</th>
                    <td>{{ $adres->miejscowosc }}</td>
                </tr>
                <tr>
                    <th scope="col">Powierzchnia</th>
                    <td>{{ $adres->ulica }} km²</td>
                </tr>
                <tr>
                    <th scope="col">Język</th>
                    <td>{{ $adres->numer_domu }}</td>
                </tr>
                <tr>
                    <th scope="col">Język</th>
                    <td>{{ $adres->numer_lokalu }}</td>
                </tr>
                <tr>
                    <th scope="col"></th>
                    <td><a href="{{ route('adres.edit', $adres->adres_id) }}" class="btn btn-primary mb-2">Edycja</a>
                        <form method="POST" action="{{ route('adres.destroy', $adres->adres_id) }}">
                            @csrf
                            @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Usuń"/>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

   
</body>

</html>
