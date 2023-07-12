<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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


Route::get('/', [PagesController::class, 'index']);
Route::get('/about',[PagesController::class,'about']);
//posts
Route::get('/posts',[PostsController::class,'index']);


//Route::get('/products/{id}',[ProductsController::class,'show'])->where('id','[0-9]+');

/*Route::get('/products/{name}/{id}',[ProductsController::class,'show'])->where([
    'name' => '[a-zA-Z]+',
    'id' =>'[0-9]+'
]
);*/



/*Route::get('/', function () {
    return view('home');
    
});*/



/*Route::get('/users',function(){

        return "<h1>Hi welcome to users!</h1>";


});

Route::get('/users',function(){


    return ['php','laravel','html'];
});
Route::get('/users',function(){

    return response()->json([
        'name'=> 'Fatlinda',
        'surname'=> 'Brahaj'
    ]);

   
    
});*/