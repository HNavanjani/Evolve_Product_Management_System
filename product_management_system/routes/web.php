<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\SellerController;
use App\HTTP\Controllers\ProductController;
use App\HTTP\Controllers\SellerProductController;

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
//--Seller routes--
//All sellers
Route::get('/seller',[SellerController::class,'sellerList'])->name('seller');
//Add seller
Route::get('/seller/add',[SellerController::class,'addSellerView'])->name('addSeller');
Route::post('seller',[SellerController::class,'addSeller']);
//Edit seller
Route::get('/seller/seller/edit',[SellerController::class,'editSellerView'])->name('editSeller');
Route::put('seller',[SellerController::class,'editSeller']);
//--Product routes--
//All products
Route::get('/product',[ProductController::class,'productList'])->name('product');
//Add product
Route::get('/product/add',[ProductController::class,'addProductView'])->name('addProduct');
Route::post('product',[ProductController::class,'addProduct']);
//Edit product
Route::get('/product/product/edit',[ProductController::class,'editProductView'])->name('editProduct');
Route::put('product',[ProductController::class,'editProduct']);
//--Seller-Products routes--
//All seller products
Route::get('/seller_product',[SellerProductController::class,'sellerProductList'])->name('seller_product');
//Add seller product
Route::get('/seller_product/add',[SellerProductController::class,'addSellerProductView'])->name('addSellerProduct');
Route::post('seller_product',[SellerProductController::class,'addSellerProduct']);
//Edit seller product
Route::get('/seller_product/seller_product/edit',[SellerProductController::class,'editSellerProductView'])->name('editSellerProduct');
Route::put('seller_product',[SellerProductController::class,'editSellerProduct']);