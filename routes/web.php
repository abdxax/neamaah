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

Route::get('/', "HomePage@index")->name('index');
Route::get('start','HomePage@start');
Route::post('/', "HomePage@index");
Route::get('login','AuthController@login')->name('login');
Route::post('login','AuthController@login');
Route::get('logout','AuthController@logout')->name('logout');
Route::middleware(['auth','adminmid'])->prefix('admin')->group(function(){
    Route::get('/','Admin\adminController@index')->name('admin.index');
    Route::get('city','Admin\adminController@city')->name('admin.city');
    Route::post('city','Admin\adminController@city');
    Route::get('deletCity/{id}','Admin\adminController@deleteCity')->name('admin.city.delete');
    Route::get('charities','Admin\adminController@charities')->name('admin.chr');
    Route::post('charities','Admin\adminController@charities');
    Route::get('orders','Admin\adminController@orders')->name('admin.orders');
    Route::get('deleteCharit/{id}','Admin\adminController@delch')->name('admin.deleteCh');

});

Route::middleware(['auth','usermid'])->prefix('user')->group(function (){
    Route::get('/','user\userController@index')->name('user.index');
    Route::get('profileupdate','user\userController@updateprofile')->name('user.profile');
    Route::post('profileupdate','user\userController@updateprofile');
    Route::get('neworder','user\userController@getNewOrder')->name('user.neworder');
    Route::get('updata/{id}','user\userController@takeorder')->name("user.takeOrder");
    Route::get('myorder','user\userController@myOder')->name('user.myorder');
    Route::post('myorder','user\userController@myOder')->name('user.myorder');
    Route::get('phone','user\userController@phones')->name('user.phone');
    Route::post('phone','user\userController@phones');
    Route::get('deletephone/{id}','user\userController@deletephone')->name('user.deletephone');
    Route::get('bank','user\userController@bankAccount')->name('user.bank');
    Route::post('bank','user\userController@bankAccount');
    Route::get('deletebank/{id}','user\userController@deletebank')->name('user.deletebank');


});

/*Route::get('test/{id?}',function ($id=null){
   if($id==1){
       return "mm";
   }
   else if($id==2){
       return "Fff";
   }

    return view('test');
});*/
//Auth::routes();



