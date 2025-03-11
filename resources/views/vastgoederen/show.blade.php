<x-base>
    <div class="container">
        <h1 class="mb-4">Diet Details</h1>

        <a href="/diet" class="btn btn-primary mb-3" style="width: 150px;">Back to Diets</a>

        <table class="table table-bordered" style="width: 100%; margin: 0 auto;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type of Diet</th>
                    <th>Nutritional Values</th>
                    <th>About</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{ $diet->id }}</td>
                    <td>{{ $diet->name }}</td>
                    <td>{{ $diet->nutrients }}</td>
                    <td>{{ $diet->description }}</td>
                    <td>
                        <div style="display: flex; justify-content: space-between; gap: 20px;">
                            <a href="/child/diet/{{$diet->id}}" class="btn btn-warning btn-sm " style="width: 150px">Kids with:</a>
                            <a href="/diet/edit/{{$diet->id}}" class="btn btn-success btn-sm " style="width: 150px">Edit</a>
                            <form action="{{ route('diet.destroy', $diet->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="width: 150px;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-base>
