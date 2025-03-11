<x-base>
    <div class="container">
        <h1 class="mb-4">{{$vastgoed->name }} Details</h1>

        <a href="/vastgoed" class="btn btn-primary mb-3" style="width: 150px;"> Terug naar alle goederen</a>

        <table class="table table-bordered" style="width: 100%; margin: 0 auto;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titel</th>
                    <th>omschrijving</th>
                    <th>prijs</th>
                    <th>locatie</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{ $vastgoed->id }}</td>
                    <td>{{ $vastgoed->titel }}</td>
                    <td>{{ $vastgoed->omschrijving }}</td>
                    <td>{{ $vastgoed->prijs }}</td>
                    <td>{{ $vastgoed->locatie }}</td>
                    <td>
                        <div style="display: flex; justify-content: space-between; gap: 20px;">
                            <a href="/vastgoed/edit/{{$vastgoed->id}}" class="btn btn-success btn-sm " style="width: 150px">bewerk</a>
                            {{-- <form action="{{ route('vastgoed.destroy', $vastgoed->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="width: 150px;">verwijder</button>
                            </form> --}}
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-base>
