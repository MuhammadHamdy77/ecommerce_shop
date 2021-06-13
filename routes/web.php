<?php

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


Route::view('/admin' ,'layouts/file-manager.file-manager');

Route::view('/home' ,'layouts/master');

Route::view('/sidebar' ,'layouts/master-layout.sidebar');

Route::view('/creatProject' ,'layouts/projects.Project_Create');

Route::view('/creatProject2' ,'layouts/projects.Project_Create2');

Route::view('/projectList' ,'layouts/projects.Project_List');

Route::view('/FAQ' ,'layouts/FAQ.FAQ');

Route::view('/forget-password' ,'layouts/password.resetePass');

Route::view('/login' ,'layouts/password.loginPage');

Route::view('/products' ,'layouts/products.products');

Route::view('/productsingle' ,'layouts/products.single-product');

Route::view('/Product_List','layouts/products.Product_List');

Route::view('/Payment_Details','layouts/products.Payment_Details');

Route::view('/Recent_Orders','layouts/products.Recent_Orders');

Route::view('/invoice','layouts/products.invoice');

Route::view('/cart','layouts/products.cart');

Route::view('/wishlist','layouts/products.wishlist');

Route::view('/checkout','layouts/products.checkout');

Route::view('/pricing','layouts/products.Pricing');
