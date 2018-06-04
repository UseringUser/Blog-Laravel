@extends("layout")
@section("links")
    @foreach($obj as $res)
        <li><a href="/posts/{{$res->id}}">{{$res->name}}</a> </li>
    @endforeach
@endsection
@section("body")
 <div class="row">
            <div style = "text-align:center;" class="col s12 m12">
              <div class="card teal darken-2">
            <div class="card-content white-text">
              <span class="card-title"><h1>О разработчике</h1></span>
               <p>Этот сайт создан учеником IT-школы Максимовым Ярославом. В этом блоге вы можете видеть новости из мира IT а также смежных направлений. Этот блог  написал в 9 классе ,когда учился в IT-школе Илларионова. Серверная часть написана на php фреймворке Laravel, фронтенд сделан на фреймворке Materialize. </p>
               <p>Надеюсь, что вам понравится.</p>
            </div>
            <div class="card-action">
               <img style = "width:100%;" src="/storage/1a.jpeg" alt="">
                </div>
            </div>
             </div>
</div>

@endsection
@section("scripts")
 <script>
</script>
 
@endsection