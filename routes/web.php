<?php

use Illuminate\Support\Facades\Route;
use app\Http\controller\product;
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

Route::get('/', function () {
    return view('welcome');
});
route::get('product.register',[product controller,'register']);
{
    route::post('product'.register'[product controller.'store']);
}

