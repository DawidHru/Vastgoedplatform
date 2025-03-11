<x-base>
<div class="container">
  <h1 style="margin-top: 20px">Our diets</h1>
  <a href="diet/create"class="btn btn-primary mb-3" style="width: 150px;">Create a new diet</a>
  <h4>These are the most common diets for the kids in our daycare. We always make sure that your children will get the necesarry nutrients for a healthy growth.</h4>
  <br>
      <table class="table table-bordered"  style="width: 100%; margin: 0 auto;">
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
              @foreach ($diets as $diet)
                  <tr>
                      <td>{{ $diet->id}}</td>
                      <td>{{ $diet->name }}</td>
                      <td>{{ $diet->nutrients }}</td>
                      <td>{{ $diet->description }}</td>
                      <td>
                        <div style="display: flex; justify-content:space-between; gap:20px;">                            
                            <a href="child/diet/{{$diet->id}}" class="btn btn-warning btn-sm " style="width: 100px">Kids with:</a>
                            <a href="diet/edit/{{$diet->id}}" class="btn btn-success btn-sm " style="width: 100px">Edit</a>
                            <form action="{{ route('diet.destroy', $diet->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="width: 100px;">Delete</button>
                            </form>
                        </div>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</x-base>
