<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BackendController::class, 'index'])->name('home');
Route::get('/add-customer',[CustomerController::class, 'addCustomer'])->name('add_customer');
Route::get('/customer-list',[CustomerController::class, 'customerList'])->name('customer_list');
Route::post('/customer-store',[CustomerController::class, 'store'])->name('customer_store');
Route::get('/customer-delete',[CustomerController::class, 'delete'])->name('customer_del');


Route::get('/create-category',[CategoryController::class, 'create'])->name('create_category');

Route::post('/category-store',[CategoryController::class, 'store'])->name('category_store');
Route::get('/category-list',[CategoryController::class, 'createList'])->name('category_list');
