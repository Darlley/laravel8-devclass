<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ProductController
};

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

/* $home = function(){
    dd('Home');
};
Route::get('/', $home);
Route::get('/', HomeController::class.'@index');
Route::get('/', [HomeController::class, 'index']); 
Route::get('/', function(){
    dd('Home');
});

Route::get('/user/{nome}/age/{idade}', function($nome, $idade){
    dd("Home " . $nome . " " . $idade);
})->where("nome", "[a-z\-]+")->whereNumber("idade");

Route::prefix('blog')->group(function(){
    Route::get('/', function(){
        dd('Blog group1');
    });
    Route::get('/post/{slug}', function($slug){
        dd($slug);
    });
});

Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        dd('Admin');
    });
});

Route::name('site.')->prefix('site')->group(function(){
    Route::get('/', function(){
        return view('welcome');
    })->name('home');
    
    Route::get('/contact', function(){
        return redirect()->route('site.teste');
    })->name('contact');
    
    Route::get('/teste', function(){
        dd('teste');
    })->name('teste');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('product/{id}', function($id){

    dd('product ' . $id);
})->name('product');

Route::get('product/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::get('/teste', function(){
    return redirect()->route('product', ['id' => 12]);
    return redirect()->action([HomeController::class, 'index']);
    return redirect()->action([ProductController::class, 'edit'], ['id' => 14]);
})->name('teste'); */

Route::get('/', function(){
    return view('welcome');
})->name('home');
Route::post('/login', function(){
    return back()->withInput();
});