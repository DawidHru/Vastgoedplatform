<div class="container">
    <h1>Wijzig dit Vastgoed</h1>
    <form action="{{ route('vastgoed.update', $vastgoed->id) }}" method="POST" class="container mt-5 mb-9">
        @csrf
        @method('PUT') <!-- Use POST method to update data -->
        
        <div class="mb-3">
            <label for="titel" class="form-label">Titel</label>
            <input type="text" name="titel" id="titel" class="form-control" value="{{ $vastgoed->titel }}" placeholder="Voeg de titel van het vastgoed toe">
        </div>
        <div class="mb-3">
            <label for="omschrijving" class="form-label">Omschrijving</label>
            <input type="text" name="omschrijving" id="omschrijving" class="form-control" value="{{ $vastgoed->omschrijving }}" placeholder="Vertel iets over het vastgoed">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ $vastgoed->type }}" placeholder="Voer het type vastgoed in">
        </div>
        <div class="mb-3">
            <label for="prijs" class="form-label">Prijs</label>
            <input type="text" name="prijs" id="prijs" class="form-control" value="{{ $vastgoed->prijs }}" placeholder="Voer de prijs in">
        </div>
        <div class="mb-3">
            <label for="locatie" class="form-label">Locatie</label>
            <input type="text" name="locatie" id="locatie" class="form-control" value="{{ $vastgoed->locatie }}" placeholder="Voer de locatie in">
        </div>
        <button type="submit" class="btn btn-success">Update Vastgoed</button>
    </form>
</div>
@if ($errors->any())
    <div>
        <h1>
            @foreach ($errors->all() as $error)
                <li>{{ strtoupper($error) }}</li>
            @endforeach
        </h1>
    </div>
@endif
