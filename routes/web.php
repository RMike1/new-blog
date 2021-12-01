<?php

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

Route::get('/example', function () {
    return "Hi there";
});

Route::get('/about', function () {
    return "My info..";
});

Route::get('/contact', function () {
    return "my contact...";
});


Route::get('/post/{id}/{name}', function ($id,$name) {
    return "hello there my number is".$id.$name;
});

Route::get('admin/posts/example', array('as'=>'admin.home',function() {
    $url = route('admin.home');

    return "this url is".$url;
}));

