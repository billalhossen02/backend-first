<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/',[AdminController::class, 'home'])->middleware('auth');


//User
Route::get('register', [AdminController::class, 'register']);
Route::post('addRegister', [AdminController::class, 'addRegister']);
Route::get('showuser', [AdminController::class, 'show']);
Route::get('login',[AdminController::class, 'login'])->name('login');
Route::post('userlogin',[AdminController::class, 'userlogin']);
Route::get('logout',[AdminController::class, 'logout']);

//Products
Route::get('product',[AdminController::class, 'product']);
Route::get('category',[AdminController::class, 'category']);
Route::post('addProduct',[AdminController::class, 'addProduct'])->name('add/product');
Route::post('addCategory',[AdminController::class, 'addCategory'])->name('add/category');
Route::get('showProduct',[AdminController::class, 'showProduct']);
Route::get('edit/product/{id}',[AdminController::class, 'editProduct']);
Route::post('update/product/{id}',[AdminController::class, 'updateProduct']);
Route::get('delete/product/{id}',[AdminController::class, 'deleteProduct']);

//Categories
$categories = DB::table('categories')->get();
Route::get('allCategory',function(){

    return view('category.show',compact('categories'));
});
Route::get('showCategory',[AdminController::class, 'showCategory']);
Route::get('edit/category/{id}',[AdminController::class, 'editCategory']);
Route::post('update/category/{id}',[AdminController::class, 'updateCategory']);
Route::get('delete/category/{id}',[AdminController::class, 'deleteCategory']);