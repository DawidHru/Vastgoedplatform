<x-base>
    <div class="container">
        <h1>Edit this diet</h1>
        <form action="/diet/update/{{$diet->id}}" method="post" class="container mt-5 mb-9">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $diet->name }}" placeholder="add the diet's name">
            </div>

            <div class="mb-3">
                <label for="nutrients" class="form-label">Nutrients</label>
                <input type="text" name="nutrients" id="nutrients" class="form-control" value="{{ $diet->nutrients }}" placeholder="tell us about the nutritional value">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="explain what the diet is for">{{ $diet->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update Diet</button>
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
