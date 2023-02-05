<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CustomerController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BackendController::class, 'index'])->name('home');
Route::get('/add-customer',[CustomerController::class, 'addCustomer'])->name('add_customer');
Route::get('/customer-list',[CustomerController::class, 'customerList'])->name('customer_list');
Route::post('/customer-store',[CustomerController::class, 'store'])->name('customer_store');

