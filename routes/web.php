<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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


Route::get('/', [ProductsController::class, 'index']);

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