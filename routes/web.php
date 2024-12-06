<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebController;

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

Route::post('/send-friend-request', 'WebController@sendFriendRequest');
Route::post('/accept-friend-request/{id}', 'WebController@acceptFriendRequest')->name('accept-friend-request');
Route::post('/decline-friend-request/{id}', 'WebController@declineFriendRequest')->name('decline-friend-request');
Route::get('/send-request/{id}', 'WebController@sendRequest')->name('send-request');

Route::get('/friends', 'WebController@getFriends');

Route::get('/', 'WebController@welcome')->middleware(['auth'])->name('home');
Route::get('/profile', 'WebController@profile')->middleware(['auth'])->name('profile');
Route::put('/profile/update', 'WebController@updateUser')->name('profile.update');

Route::get('/user-profile/{id}', 'WebController@user_profile')->middleware(['auth'])->name('user-profile');

// USER SCHEDULE
Route::get('/user-schedule/{id}', 'WebController@user_schedule')->middleware(['auth'])->name('user-schedule');
Route::get('/user-schedules/{id}', 'WebController@getUserSchedules');

// Coach Can GO
Route::post('/mark-attendance','WebController@markAttendance')->name('mark.attendance');
Route::get('/user-attendance/{scheduleHolderId}', 'WebController@getUserAttendance');


// STRIPE PAYMENT
Route::post('/checkout-payment', 'WebController@checkout')->name('checkout-payment');

Route::get('/stripe-success', 'WebController@stripeSuccess')->name('stripe.success');
Route::get('/stripe-cancel', 'WebController@stripeCancel')->name('stripe.cancel');


Route::get('/find-people', 'WebController@find_people')->name('find-people');
Route::get('/user-friends', 'WebController@user_friends')->middleware(['auth'])->name('user-friends');
Route::get('/your-friends', 'WebController@your_friends')->middleware(['auth'])->name('your-friends');
Route::get('/friend-requests', 'WebController@friend_requests')->middleware(['auth'])->name('friend-requests');
Route::get('/schedule', 'WebController@schedule')->middleware(['auth'])->name('schedule');
Route::post('/update-schedule', 'WebController@updateSchedule')->name('update.schedule');
Route::get('/get-schedules', 'WebController@getSchedules')->name('get.schedules');

Route::get('/about', 'WebController@about')->name('about');
Route::get('/faq', 'WebController@faq')->name('faq');
Route::get('/contact', 'WebController@contact')->name('contact');
Route::post('/post/{post}/comment', [WebController::class, 'storeComment'])->name('post.comment');
Route::post('/like/{postId}', [WebController::class, 'likePost'])->name('like.post');

Route::post('/upload-profile-picture', [WebController::class, 'uploadProfilePicture'])->name('upload-profile-picture');



// FOR POST
Route::post('/create-post', [PostController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';




// Admin
Route::
        namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
            Route::namespace('Auth')->middleware('guest:admin')->group(function () {
                // login route
                Route::get('login', 'AuthenticatedSessionController@create')->name('login');
                Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
            });
            Route::middleware('admin')->group(function () {
                Route::get('dashboard', 'HomeController@index')->name('dashboard');

                Route::get('admin-test', 'HomeController@adminTest')->name('admintest');
                Route::get('editor-test', 'HomeController@editorTest')->name('editortest');

                Route::resource('posts', 'PostController');


                // Category
                Route::get('add-new-category', 'HomeController@add_new_category')->name('add-new-category');
                Route::post('category-store', 'HomeController@category_store')->name('category-store');
                Route::get('category-list', 'HomeController@category_list')->name('category-list');
                Route::delete('category-delete/{id}', 'HomeController@category_delete')->name('category-delete');
                Route::get('category-edit/{id}', 'HomeController@category_edit')->name('category-edit');
                Route::put('category-update/{id}', 'HomeController@category_update')->name('category-update');


                // USER
                Route::get('user-list', 'HomeController@user_list')->name('user-list');
                Route::delete('user-delete/{id}', 'HomeController@user_delete')->name('user-delete');
                Route::get('user-view/{id}', 'HomeController@user_view')->name('user-view');



                // Payments
                Route::get('payment-list', 'HomeController@payment_list')->name('payment-list');


                // PROFILE
                Route::get('profile-view', 'HomeController@profile_view')->name('profile-view');
                Route::post('profile-update', 'HomeController@profile_update')->name('profile-update');



            });
            Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
        });






