<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{HomeController,AddinfoController, ProfileController , CustomerController,};


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
Auth::routes();

Route::get('/',[App\Http\Controllers\FrontendController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/users', [HomeController::class, 'users']);



// CustomerController
Route::get('/account', [CustomerController::class, 'account'])->name('account');
Route::post('/customer/login', [CustomerController::class, 'customer_login'])->name('customer.login');
Route::post('/customer/register', [CustomerController::class, 'customer_register'])->name('customer.register');




//addinfoController
Route::get('/myprofile', [CustomerController::class, 'myprofile']);

Route::get('/product', [AddinfoController::class, 'product']);
Route::post('/product/insert', [AddinfoController::class, 'productinsert']);
Route::get('/product/edit/{id}', [AddinfoController::class, 'productedit']);
Route::post('/product/edit/post/{id}', [AddinfoController::class, 'producteditpost']);
Route::get('/product/delete/{id}', [AddinfoController::class, 'productdelet']);









