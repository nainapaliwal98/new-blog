<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "About page";
// });

// Route::get('/contact', function () {
//     return "Contact page";
// });

// Route::get('/post/{id}/{name}',function($id,$name){
//     return "this is post number".$id." ".$name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home',function(){
//     $url = route('admin.home');
//     //<a href="route('admin.home')">CLICK HERE </a>

//     return "this url is".$url;
// }));

// Route::get('/contact',[PostsController::class, 'contact']);

// Route::get('post/{id}',[PostsController::class,'show_post']);

Route::get('/insert', function(){
    DB::insert('insert into posts(title,content) values(?,?)',['PHP  with Laravel', 'Laravel is the best thing that has happened to PHP']);

});


// Route::get('/read', function() {
//     DB::select('select * from posts where id =?', [1]);
// });


// Route::get('/find', function(){
//     $post = Post::find(2);

// });

//     // foreach($posts as $post){
//     //     return $post->title;
// //}


// Route::get('/findwhere', function(){
//     $posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();
//     return $posts;
// });


// Route::get('/basicinsert', function(){
//     $post = new Post;

//     $post->title ='New Eloquent title insert';
//     $post->content = 'Woooowwwwww its really cool!';
    
//     $post->save();
// });
