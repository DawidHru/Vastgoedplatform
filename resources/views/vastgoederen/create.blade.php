<x-base>
    <div class="container">
        <h1  style="margin-top: 20px">Add a new diet</h1>
        <form action="/diet" method="post" class="container mt-5 mb-9">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="add the diets name">
            </div>

            <div class="mb-3">
                <label for="nutrients" class="form-label">Nutrients</label>
                <input type="text" name="nutrients" id="nutrhients" class="form-control" rows="4" placeholder="tell us about the nutritional value">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="explain what the diet is for"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Create diet </button>
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
</x-base>
