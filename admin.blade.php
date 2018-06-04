@extends("layout")
section("body")
<form action = "/adminadd" method="post" enctype="multipart/form-data">
 <div>
   <label for="file">Choose file to upload</label>
   <input type="file" name="file" multiple>
 </div>
 <div>
   <button>Submit</button>
 </div>
</form>

          
 @endsection