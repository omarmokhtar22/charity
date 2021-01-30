<?php
Route::group(['prefix' => 'admin'], function () {
    Route::get('/','Admin\MainController@index');
    Route::resource('/users', 'Admin\UsersController');
    Route::resource('/roles', 'Admin\RolesController');
    Route::resource('/permissions', 'Admin\PermissionsController');
    Route::resource('/news', 'Admin\NewsController');
    Route::resource('/reviews', 'Admin\ReviewsController');
    Route::resource('/greetings', 'Admin\GreetingsController');
    Route::post('/ckeditor/image_upload', 'Admin\CKEditorController@upload')->name('upload');
    Route::resource('/photos', 'Admin\PhotosController');
    Route::resource('/videos', 'Admin\videosController');
    Route::resource('/pages', 'Admin\PagesController');
    Route::resource('/slider', 'Admin\SliderController');
    Route::get('/numbers', 'Admin\NumbersController@index');
    Route::post('/numbers/save', 'Admin\NumbersController@store');
    Route::get('/contacts', 'Admin\ContactsController@index');
    Route::post('/contacts/save', 'Admin\ContactsController@store');
    Route::resource('/sponsers', 'Admin\SponserController');

    Route::get('/image','Admin\ImageController@index');
    Route::get('/test/menu', 'Admin\TestController@menu');
    Route::post('/upload','Admin\ImageController@uploadimage')->name('imageupload');
    Route::post('/images-upload', 'Admin\PhotosController@imagesUploadPost')->name('images.upload');
    Route::post('/image/delete','Admin\ImageController@deleteimg')->name('deleteimage');
});
//Route::post('images-upload', 'Admin\PhotosController@imagesUploadPost')->name('images.upload');

