<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    $results = App\Category::all();
    return view('welcome',["obj"=>$results]);
});
Route::get('/posts/{id}', function($id){
     $results = App\Category::all();
    $result = App\Post::where('id_category','=',$id)->get();
    return view('posts',["obj"=>$results,"obj2"=>$result]);
    
});
Route::get('/post/{id}', function($id){
     $results = App\Category::all();
    $result = App\Post::find($id);
    $comments = App\Post::find($id)->comments;
    return view('post',["obj"=>$results,"obj2"=>$result,"comments"=>$comments]);
    
});
Route::post('/comment/{id}', function(Request $req,$id){
 App\Comment::create([
     "body"=>$req->comment,
     "post_id"=> $id
 ]);
    return back();
});
Route::get('/admin', function(){
    return view('admin');
    
});
Route::post('/adminadd', function(Request $req){
 App\Post::create([
     "file"=>$req->title,
 ]);
    return back();
});
Route::get('/make/',function(){
     $results = App\Category::all();
    return view('make',["obj"=>$results]);
    
});
Route::post('/addPost', function(Request $req){
  // $path = $req->file("lol")->store();
   $path = Storage::put('',$req->file("image"));
   
   App\Post::create([
        "body"=>$req->body,
        "title"=>$req->title,
        "id_category"=>$req->category,
        "path"=>"/storage/".$path,
    ]);
   return back();
    // echo $path;
});


