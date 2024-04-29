<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey ='id';
}
// Route::get('/insert', function(){
//     DB::insert('insert into posts(title,content) values(?,?)',['PHP  with Laravel', 'Laravel is the best thing that has happened to PHP']);
// });