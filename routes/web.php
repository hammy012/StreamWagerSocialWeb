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

Route::get('/','WebController@welcome')->name('home');
Route::get('/profile', 'WebController@profile')->middleware(['auth'])->name('profile');
Route::get('/find-people','WebController@find_people')->name('find-people');
Route::get('/user-friends','WebController@user_friends')->name('user-friends');
Route::get('/your-friends','WebController@your_friends')->name('your-friends');
Route::get('/about','WebController@about')->name('about');
Route::get('/faq','WebController@faq')->name('faq');
Route::get('/contact','WebController@contact')->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        // login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard','HomeController@index')->name('dashboard');

        Route::get('admin-test','HomeController@adminTest')->name('admintest');
        Route::get('editor-test','HomeController@editorTest')->name('editortest');

        Route::resource('posts','PostController');


        // Category
        Route::get('add-new-category', 'HomeController@add_new_category')->name('add-new-category');
        Route::post('category-store', 'HomeController@category_store')->name('category-store');
        Route::get('category-list', 'HomeController@category_list')->name('category-list');
        Route::delete('category-delete/{id}', 'HomeController@category_delete')->name('category-delete');
        Route::get('category-edit/{id}', 'HomeController@category_edit')->name('category-edit');
        Route::put('category-update/{id}', 'HomeController@category_update')->name('category-update');


    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});






