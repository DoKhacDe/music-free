<?php

use App\Http\Controllers\ProxyAssetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/customily-products/{customilyProduct}', function (\App\Models\CustomilyProduct $customilyProduct) {
//    return $customilyProduct;
//});
//
//Route::get('/storage/product-images/{name}', [ProxyAssetController::class, 'show'])->name('proxy-assets.show');
