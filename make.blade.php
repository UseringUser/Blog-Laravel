@extends("layout") @section("links")
<li><a href="/">Главная</a> </li>
 @foreach($obj as $res)
<li><a href="/posts/{{$res->id}}">{{$res->name}}</a> </li>
@endforeach 
@endsection 
@section("body") 



    <p>Выберите тему обсуждения и напишите её содержание</p>
    <div class="row">
        <form class="col s12" method = "post" action = "/addPost" enctype="multipart/form-data">
           @csrf
            <p>Выберите категорию</p>
            <div class="input-field col s12">
                <select name = "category">
      @foreach($obj as $res)
         <option  value="{{$res->id}}">{{$res->name}}</option>
        @endforeach
                </select>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="title" id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                    <label for="textarea2">Тема обсуждения</label>
                    <input  name="body" placeholder="Cодержание" type="text">
                    <input  type="file" name="image">
                </div>
            </div>
             
              <button type="submit" class="btn pulse">Опубликовать</button>
        </form>
    </div>


@endsection 
@section("scripts")
<script>
    $(document).ready(function() {
        $('select').formSelect();
    });

</script>
@endsection
