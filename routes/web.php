<?php
use App\Book;
use Illuminate\Support\Facades\Input;
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
    return view('welcome');
});

//FOR BOOKS
Route::get('/home', 'BookController@index');
Route::get('/books', 'BookController@index');
Route::post('/books/add', 'BookController@add');
Route::get('delete/{id}','BookController@destroy');
Route::get('update/{id}','BookController@update');
Route::get('/sortbyname', 'BookController@sortbyname');
Route::get('/sortbyprice', 'BookController@sortbyprice');
Route::get('/sortbyrackno', 'BookController@sortbyrackno');
Route::post('/searchbookbyname', 'BookController@searchbookbyname');
Route::post('/searchbookbyauthor', 'BookController@searchbookbyauthor');
Route::post('/searchnamecheckout', 'BookController@searchnamecheckout');
Route::post('/searchauthorcheckout', 'BookController@searchauthorcheckout');
Route::get('/search', 'BookController@search');
Route::get('/checkout', 'BookController@checkout');
Route::get('sold/{quantity}{id}','BookController@sold');
Route::post('/pdfview','BookController@pdfview');


