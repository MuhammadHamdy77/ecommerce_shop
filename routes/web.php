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