<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BackendController::class, 'index'])->name('home');
Route::get('/add-customer',[CustomerController::class, 'addCustomer'])->name('add_customer');
Route::get('/customer-list',[CustomerController::class, 'customerList'])->name('customer_list');
Route::post('/customer-store',[CustomerController::class, 'store'])->name('customer_store');
Route::post('/delete', [CustomerController::class, 'delete'])->name('delete');



Route::get('/create-category',[CategoryController::class, 'create'])->name('create_category');
Route::post('/category-store',[CategoryController::class, 'store'])->name('category_store');
Route::get('/category-list',[CategoryController::class, 'createList'])->name('category_list');
Route::post('/delete', [CategoryController::class, 'delete'])->name('delete');
Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category_edit');
Route::put('/category/update/{id}',[CategoryController::class, 'update'])->name('category_update');

// AddController Route.....


Route::get('/add-product',[AddController::class, 'add'])->name('add_product');
Route::post('/product_store',[AddController::class, 'storeProduct'])->name('product_store');

