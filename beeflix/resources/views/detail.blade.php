@extends('base')

@section('body')
    <h2 class="title">Movies</h2>
    <div class="row">
    <div class="col-lg-6">
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-400">
            <a><img class="card-img-top" src="{{$movies->photo}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>{{$movies->title}}</a>
                </h4>
            <a >{{$movies->description}}</a>
            <h4>
                <a>Kategori : {{$genre->name}}</a>
            </h4>
              </div>
              <div class="card-footer">
                <small class="text-muted">
                  @for($j=0;$j<(int)$movies->rating;$j++)
                  &#9733;
                  @endfor
                  @for($j=0;$j<5-((int)$movies->rating);$j++)
                    &#9734;
                  @endfor
              </small>
              </div>
            </div>
          </div>
    </div>
    <div class="col-lg-6">
    <table class="table">
        <thead>
        <tr>
            <th>Episode</th>
            <th>Judul</th>
        </tr>
        </thead>
        <tbody>
        {{-- MENAMPILKAN DATA ITEM --}}
        {{-- Masukkan kode untuk menampilkan data --}}

        @foreach ($episodes as $i)
            <tr>
                <td>{{$i->episode}}</td>
                <td>{{$i->title}}</td>
            </tr>
        @endforeach


        </tbody>
    </table>
    {{-- MEMBERIKAN PAGING ITEM --}}
    {{-- Masukkan kode untuk membuat tombol navigasi halaman --}}
    {{$episodes->links()}}
    </div>
    </div>
@endsection
