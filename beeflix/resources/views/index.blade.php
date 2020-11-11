@extends('base')

@section('body')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Movie Category</h1>
        <div class="list-group">
            <a href="/home" class="list-group-item">All Category</a>
            @foreach ($genres as $i)
        <a href="/home/category/{{$i->id}}" class="list-group-item">{{$i->name}}</a>
          @endforeach
        </div>

      </div>
      <div class="col-lg-9">
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        @if(isset($genre))
        <h2>Displaying for Movie Category : {{$genre->name}}</h2>
        @else
        <h2>Displaying for All Movie Category </h2>
            @endif
      </div>
      <div class="row">

        @foreach ($movies as $i)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
            <a href="/home/{{$i->id}}"><img class="card-img-top" src="{{$i->photo}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="/home/{{$i->id}}">{{$i->title}}</a>
                </h4>
                <a href="/home/{{$i->id}}">Lihat Film</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
    @endforeach
        
    </div>
    </div>
    </div>
</div>

@endsection
