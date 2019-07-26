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
Route::get('/one', function () {
    return view('one');
});
Route::get('/two', function () {
    return view('two');
});
Route::get('/three', function () {
    return view('three');
});
Route::get('/four', function () {
    return view('four');
});
Route::get('/five', function () {
    return view('five');
});
Route::get('/six', function () {
    return view('six');
});
Route::get('/seven', function () {
    return view('seven');
});
Route::get('/eight', function () {
    return view('eight');
});
Route::get('/nine', function () {
    return view('nine');
});
Route::get('/ten', function () {
    return view('ten');
});
Route::get('{page}', function ($slug) {
    $page = \App\usertemplate::findBySlug($slug);
    return view()->first(
        ["pages/{$page->slug}", 'default-page'], compact('page')
    );
});