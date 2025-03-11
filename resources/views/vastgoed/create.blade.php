<div class="container">
    <h1 style="margin-top: 20px">Voeg een nieuw Vastgoed toe</h1>
    <form action="{{ route('vastgoed.store') }}" method="post" class="container mt-5 mb-9">
        @csrf
        <div class="mb-3">
            <label for="titel" class="form-label">Titel</label>
            <input type="text" name="titel" id="titel" class="form-control" placeholder="Voer de titel in">
        </div>

        <div class="mb-3">
            <label for="omschrijving" class="form-label">Omschrijving</label>
            <textarea name="omschrijving" id="omschrijving" class="form-control" rows="4" placeholder="Voer de omschrijving in"></textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Voer het type in">
        </div>

        <div class="mb-3">
            <label for="prijs" class="form-label">Prijs</label>
            <input type="text" name="prijs" id="prijs" class="form-control" placeholder="Voer de prijs in">
        </div>

        <div class="mb-3">
            <label for="locatie" class="form-label">Locatie</label>
            <input type="text" name="locatie" id="locatie" class="form-control" placeholder="Voer de locatie in">
        </div>

        <button type="submit" class="btn btn-success">Vastgoed aanmaken</button>
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
