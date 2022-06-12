<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
/*
Route::get('/', function () {
    return view('homemedic'); //menggunakan closure
});*/

Route::get('/', 'MedicineController@front_index');
Route::get('cart', 'MedicineController@cart');
Route::get('add-to-cart/{id}', 'MedicineController@addToCart');
Route::get('submit_checkout', 'TransactionController@submit_front')->name('submitCheckout')
->middleware(['auth']);

// Week 2
Route::get('catalogs', function () {
    return view('catalogs');
});

Route::get("catalogs/medicines", function () {
    return view('medicines');
});

Route::get("catalogs/medicines/{id?}", function ($id) {
    return view('detailmed', ['id' => $id]);
});

Route::get("catalogs/med_equip", function () {
    return view('medequip');
});

Route::get("catalogs/med_equip/{id?}", function ($id) {
    return view('detailequip', ['id' => $id]);
});
//end

//Route::view('/', 'welcome'); menggunakan view controller

Route::get("foo", function () {
    return 'hello world!';
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});

Route::get('greeting', function () {
    return view('welcome', ['name' => 'Samantha']);
});

//Week 4
//Routing untuk controller, function digunakan dalam controller
//Route::get('newproduct','ProductController@create');
//Route::get('updateproduct','ProductController@update');

//Route::resource('product','ProductResController'); //dapat menghandling 7 fungsi dalam resource controller

Route::resource('obat','MedicineController');
Route::resource('kategori_obat','CategoryController');
Route::resource('transaksi', 'TransactionController');

Route::post('/medicines/showInfo','MedicineController@showInfo')->name('medicines.showInfo');

Route::post('/kategori_obat/getEditForm','CategoryController@getEditForm')->name('kategori_obat.getEditForm');
Route::post('/kategori_obat/getEditForm2','CategoryController@getEditForm2')->name('kategori_obat.getEditForm2');
Route::post('/kategori_obat/saveData','CategoryController@saveData')->name('kategori_obat.saveData');
Route::post('/kategori_obat/deleteData','CategoryController@deleteData')->name('kategori_obat.deleteData');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
