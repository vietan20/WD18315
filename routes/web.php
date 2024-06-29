
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SvController;
//Base url : http://127.0.0.1:8000

Route::get('/', function () {
    echo 'trang chu';
});
############################################################################################

Route::get('list-product', [ProductController::class, 'showProduct']);
Route::get('list-sinhvien', [SvController::class, 'showSV']);
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);
Route::get('update-product', [ProductController::class, 'updateProduct']);
############################################################################################
Route::get('queryBuilder', [ProductController::class, 'queryBuilder']);
