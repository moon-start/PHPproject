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


## view(導向)
Route::get('/', function () {
    return view('welcome');
});


// ## 預設的入口 /public/
// Route::get('/', function () {
//     return "HELLO";
// });

### URL目錄 - 一個name變數
### 預設值 moon
Route::get('user/{name?}', function ($name = 'moon') {
    return 'hello'.$name;
});



Route::get('QQ123', 'QQController@index');
