
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SvController;
//Base url : http://127.0.0.1:8000

Route::get('/', function(){
    echo 'trang chu';
});
Route::get('list-sinhvien', [SvController::class, 'showSV']);
Route::get('list-product', [ProductController::class, 'showProduct']);
//truyền dữ liệu từ route sang controller
//slug
//http://127.0.0.1:8000/get-products/3/iphone
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

//params
//http://127.0.0.1:8000/update-products/?id=3&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);


