<x-layout>
    @foreach ($data as $item)
    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$item->name}}</h5>
          <p class="card-text">{{$item->description}}</p>
          <p class="card-text">{{$item->price}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

    @endforeach
</x-layout>