@extends("layout")
@section("links")
   <li><a href="/">Главная</a> </li>
    @foreach($obj as $res)
        <li><a href="/posts/{{$res->id}}">{{$res->name}}</a> </li>
        
    @endforeach
   
@endsection
@section('body')
    
        <h1>{{$obj2->title}}</h1>
        <img src="{{asset($obj2->path)}}" alt="">
        <p>{{$obj2->body}}</p>
        <h2>Комментарии</h2>
        @foreach ($comments as $comment) 
        <p>{{$comment->body}}</p>
         <p>{{$comment->created_at->diffForHumans()}}</p>
        <hr>
        @endforeach
        <form action="/comment/{{$obj2->id}}" method = "post">
        @csrf
        <input name = "comment" placeholder = "Коммент" type="text">
        <button type = "submit" class = "btn">Нажать</button>
        </form>

          @endsection