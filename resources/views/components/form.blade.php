<div class="d-flex justify-content-center mt-5">
    <div class="w-25 border p-4">
        <form method="POST" action="{{route('adding')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">nome del articolo:</label>
              <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">descrizzione:</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{old('description')}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">prezzo</label>
                <input type="number" name="price" class="form-control" id="exampleInputPassword1" value="{{old('price')}}">
              </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">aggiungi un imagine:</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>