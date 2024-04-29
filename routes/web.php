<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Http\Controllers\StaticTableController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CcustomerController;
use App\Models\Ccustomer;
use App\Http\Controllers\AllDataController;
use App\Models\Student;
use App\Http\Controllers\StudentController;
use App\Models\Clothes;
use App\Http\Controllers\ClothesController;

Route::get('/clothes/create', [ClothesController::class, 'create'])->name('create.clothes');
Route::get('/clothes/list', [ClothesController::class, 'list']);
Route::get('/clothes/destroy/{id}', [ClothesController::class, 'destroy'])->name('destroy.clothes');
Route::get('/clothes/edit/{id}', [ClothesController::class, 'edit'])->name('edit.clothes');
Route::post('/clothes/update/{id}', [ClothesController::class, 'update'])->name('update.clothes');
Route::post('/clothes/store',  [ClothesController::class,'store'])->name('store.clothes');

Route::get('/student/create', [StudentController::class, 'create'])->name('create.student');
Route::get('/student/list', [StudentController::class, 'list']);
Route::post('/student/store', [StudentController::class, 'store'])->name('store.student');
Route::get('/student/destroy/{id}', [StudentController::class, 'destroy'])->name('destroy.student');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('edit.student');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('update.student');


Route::get('/register', [RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class, 'register']);

Route::get('/ccustomer', [CcustomerController::class,'index']);
Route::post('/ccustomer',[CcustomerController::class, 'store']);

Route::get('/ccustomer', [CcustomerController::class, 'index'])->name( 'ccustomer' );
Route::get('/ccustomer/list', [CcustomerController::class, 'list']);
Route::get('/ccustomer/destroy/{id}', [CcustomerController::class, 'destroy'])->name('ccustomer.destroy');

Route::get('/ccustomer/edit/{id}', [CcustomerController::class, 'edit'])->name('ccustomer.edit');
Route::post('/ccustomer/update/{id}', [CcustomerController::class, 'update'])->name('ccustomer.update');









// Route::get('/ccustomer',function(){
//     $ccustomer= Ccustomer::all();
//     echo "<pre>";
//     print_r($ccustomer->toArray());

// });

Route::get('/posts', function(){
    $posts= Post::all();
    echo "<pre>";
    print_r($posts);
});


Route::get('/static-table', [StaticTableController::class,'generateStaticTable']);

 





Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/demo/{name}/{id?}', function($name, $id= null){
    //echo "Hello everyone!!!!!!!!";
    echo $name. "  ";
    echo $id;
    //return view('demo');
});
Route::any('/test', function(){
    echo "Testing the route";
});

// Route::post('/test', function(){
//     echo "Testing the route";
// });

// Route::put('users/{id}', function ($id){
// });

// Route::patch();

// Route::delete('users/{id}', function($id){

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

//Route::get('post/{id}',[PostsController::class,'show_post']);

// Route::get('/insert', function(){
//     DB::insert('insert into posts(title,content) values(?,?)',['PHP  with Laravel', 'Laravel is the best thing that has happened to PHP']);

// Route::get('/insert', function () {  
//     return view('create');  
// }); 
// Route::post('/insert', 'PostsController@login')->name('posts.store');
//Route::post('/posts', 'PostController@store')->name('posts.store');





// });
//We can also pass the multiple parameters.  
// Route::get('/post/{id}/{name}', function($id,$name)  
// {  
//   return "id number is : ". $id ." ".$name;   
// }  
// ); 
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
