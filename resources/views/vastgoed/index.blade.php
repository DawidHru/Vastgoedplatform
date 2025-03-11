<div class="container">
    <h1 style="margin-top: 20px">Onze Vastgoed</h1>
    <a href="vastgoed/create" class="btn btn-primary mb-3" style="width: 150px;">Nieuw Vastgoed Toevoegen</a>
    <h4>Dit is een overzicht van het beschikbare vastgoed. We zorgen ervoor dat alle details correct en up-to-date zijn.</h4>
    <br>
        <table class="table table-bordered" style="width: 100%; margin: 0 auto;">
            <thead>
                <tr> 
                    <th>#</th>
                    <th>Titel</th>
                    <th>Type</th>
                    <th>Omschrijving</th>
                    <th>Locatie</th>
                    <th>Prijs</th>
                    <th>Acties</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($vastgoederen as $vastgoed)
                    <tr>
                        <td>{{ $vastgoed->id }}</td>
                        <td>{{ $vastgoed->titel }}</td>
                        <td>{{ $vastgoed->type }}</td>
                        <td>{{ $vastgoed->omschrijving }}</td>
                        <td>{{ $vastgoed->locatie }}</td>
                        <td>€{{ $vastgoed->prijs}}</td>
                        <td>
                          <div style="display: flex;">                            
                              <a href="vastgoed/{{ $vastgoed->id }}" class="btn btn-warning btn-sm" style="width: 100px">Details</a>
                              <a href="vastgoed/edit/{{ $vastgoed->id }}" class="btn btn-success btn-sm" style="width: 100px">Bewerken</a>
                              <form action="{{ route('vastgoed.destroy', $vastgoed->id) }}" method="POST" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm" style="width: 100px;">Verwijderen</button>
                              </form>
                          </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  