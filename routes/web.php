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

Route::get('/',function (){
    return view('welcome');
});
Route::get('/adminn/loginn/$2y$10$aWOoVTKLSlwDs4mWarPiUe1s1GdX6skuTRefS9PjWxMkv4g27QRa','AuthController@login');
Route::post('/adminn/loginn','AuthController@postLogin');


Route::group(['middleware'=>'auth','prefix'=>'adminn'],function(){
    Route::get('/logout','AuthController@logout');
    Route::get('/home','AuthController@home');
});


Route::group(['middleware'=>'auth','prefix'=>'adminn','namespace'=>'Admin'],function(){
    Route::resource('/news','NewsController',['as'=>'admin']);
    Route::resource('/region','RegionController',['as'=>'admin']);
    Route::resource('/ht/category','Ht\HtCategoryController',['as'=>'admin.ht']);//admin.ht.category.create
    Route::resource('/ht','Ht\HtController',['as'=>'admin']);//admin.ht.create
    Route::get('filter/ht','Ht\HtController@index');
    Route::resource('/group','Ht\HtGroupController',['as'=>'admin']);//admin.group.create
    Route::resource('/profile/ht','Ht\HtProfileController',['as'=>'admin.profile']);//admin.group.create

    Route::resource('/pdf','PdfController',['as'=>'admin']);//admin.profile.ht.create
    Route::get('view/pdf/{id}/{lang}','PdfController@viewPdf')->name('pdf.viewpdf');
    Route::get('download/pdf/{id}/{lang}','PdfController@downloadPdf')->name('pdf.download');

    Route::resource('/user','UserController',['as'=>'admin']);//admin.user.create
    Route::post('pdf/update/{id}','PdfController@update')->name('pdf.update');
});


Route::get('/test',function(){
    return bcrypt('test');
});