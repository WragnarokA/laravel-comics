@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div class="containerCard">
                @foreach ($comics as $comic)
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic['title']}}</h5>
                      <ul>
                        @foreach ($comic['artists'] as $artist)
                        <li>{{$artist}}</li>
                            
                        @endforeach
                      </ul>
                    </div>
                  </div>
                    
                @endforeach 
            </div>
        </div>
    </div>

</div>
@endsection