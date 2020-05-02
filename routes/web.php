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

Auth::routes();

Route::get('/', function () {
    return view('index',['title'=>'Home | shivasharanaharalayyatrust.lk']);
})->name('welcome');

Route::get('contact', function () {
    return view('contact',['title'=>'Contact | shivasharanaharalayyatrust.lk']);
})->name('contact');

Route::get('donate', function () {
    return view('donate',['title'=>'Donate | shivasharanaharalayyatrust.lk']);
})->name('donate');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('saveDonate', 'PaymentController@saveDonate')->name('saveDonate');

Route::get('send_email', 'MessageController@sendEmail')->name('sendEmail');


Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'admin'], function () {

        Route::get('admin_payments_view', 'PaymentController@adminPaymentsView')->name('adminPaymentsView');

    });
});





