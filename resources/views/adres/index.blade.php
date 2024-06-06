<div class="container mt-5 mb-5">
    <div class="row mb-1">
        <h1 class="fw-bold">Adres</h1>
    </div>
    <div class="row mb-2"></div>

    <div class="row">
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Województwo</th>
                        <th scope="col">Powiat</th>
                        <th scope="col">Miejscowość</th>
                        <th scope="col">Ulica</th>
                        <th scope="col">Numer domu</th>
                        <th scope="col">Numer lokalu</th>
                        <th scope="col">Akcje</th>
                        <th scope="col"><a href="{{ route('adres.create')}}" class="btn btn-primary">Utwórz</a></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($adresy as $a)
                    <tr>
                        <td>{{ $a->wojewodztwo }}</td>
                        <td>{{ $a->powiat }}</td>
                        <td>{{ $a->miejscowosc }}</td>
                        <td>{{ $a->ulica }}</td>
                        <td>{{ $a->numer_domu }}</td>
                        <td>{{ $a->numer_lokalu }}</td>
                        <td>
                            <a href="{{ route('adres.edit', $a->adres_id) }}" class="btn btn-primary btn-sm me-2">Edytuj</a>
                            <form method="POST" action="{{ route('adres.destroy', $a->adres_id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">Brak adresów</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
