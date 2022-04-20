<?php

Route::group(['prefix' => 'imgfly'], function(){

    Route::get('/public/{dir}/{path}', '\AtmDen\ImgFly\Controllers\ImgController')->where('path', '.+');

    Route::get('/{dir}/{path}', '\AtmDen\ImgFly\Controllers\ImgflyController')->where('path', '.+');

});
