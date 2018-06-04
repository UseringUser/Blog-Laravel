@extends("layout")
@section("links")
   <li><a href="/">Главная</a> </li>
    @foreach($obj as $res)
        <li><a href="/posts/{{$res->id}}">{{$res->name}}</a> </li>
    @endforeach
@endsection
@section('body')
 @foreach($obj2 as $res2)
         <div class="row">
            <div class="col s12 m12">
              <div class="card teal darken-2">
            <div class="card-content white-text">
              <span class="card-title">{{$res2->title}}</span>
               <p>{{str_limit($res2->body, 200),$res2->body}}</p>
            </div>
            <div class="card-action">
              <a class = "white-text" href="/post/{{$res2->id}}">Читать дальше</a>
                </div>
                  </div>
             </div>
            </div>
        
        
    @endforeach
    @endsection