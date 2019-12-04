<?php
Route::group(['middleware'=>['apiSecret','locale'],'namespace'=>'Api'],function(){
    Route::get('/news','NewsApi@all');
    Route::get('/region','RegionApi@all');
    Route::get('/ht/category','HtApi@allCategory');
    Route::get('/ht/pm','HtApi@allPm');
    Route::post('/ht/filter','HtApi@pmFilter');
    Route::get('/pm/detail','HtApi@pmDetail');
    Route::get('/ht/profile','HtApi@getProfile');
    Route::get('/pdf/all','PdfApi@all');
    Route::get('/pdf/detail','PdfApi@detail');
    Route::get('/pdf/download','PdfApi@detail');
    Route::get('/ht/group','HtApi@getGroup');
    Route::get('search/ht','HtApi@search');
});