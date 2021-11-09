<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

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

//Frontend
Route::get('/',[HomeController::class, 'index'] );
Route::get('/trang-chu',[HomeController::class, 'index']);
Route::get('/lien-he',[ContactController::class, 'contact']);

//Danh muc san pham trang chu
Route::get('/danh-muc/{slug_category_product}',[CategoryProduct::class, 'show_category_home']);
Route::get('/thuong-hieu/{brand_slug}',[BrandProduct::class, 'show_brand_home']);
Route::get('/chi-tiet/{product_slug}',[ProductController::class, 'details_product']);

//Backend
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class, 'show_dashboard']);
Route::get('/logout',[AdminController::class, 'logout']);
