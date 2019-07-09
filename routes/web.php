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

    // Schema::create('programermq', function ($myTabel) {
    //     // $myTabel->increment('id');
    //     $myTabel->string('fullname');
    //     $myTabel->timestamps();
    // });

    // Schema::table('programermq', function ($myTabel) {
    //     // $myTabel->increment('id');
    //     // $myTabel->string('fullname');
    //     // use remove column
    //     // $myTabel->dropColumn('fullname'); 
    //     $myTabel->increments('id');
    // });


    return view('welcome');
});

// Route::get('about', function () {
//     return view ("test" , array('name'=> 'ahmad'));
// });


// Route::get('about/{id}', function ($id) {
//     return "hello  $id";  // anther way:  'hello ' . $id;
// });

Route::get('login', function () {
    return view('login');
});
Route::post('login', 'NewsController@index');

Route::get( 'home', function () {
    return view( 'home');
});
Route::post('home', function () {
    
    $firstname = Input::get('firstname');
    return view('home')->with('firstname', $firstname);
});
