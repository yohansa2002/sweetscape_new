<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OpenAIController;
use App\Http\Controllers\SubscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect'])-> middleware('auth','verified');

Route::get('/view_category',[AdminController::class,'view_category']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);   //when user click on delete id it will cache the id and in the delete category function
Route::get('/view_product',[AdminController::class,'view_product']);
Route::post('/add_product',[AdminController::class,'add_product']);
Route::get('/show_product',[AdminController::class,'show_product']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('/update_product/{id}',[AdminController::class,'update_product']);
Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
Route::get('/order',[AdminController::class,'order']);
Route::get('/delivered/{id}',[AdminController::class,'delivered']);
Route::get('/send_email/{id}',[AdminController::class,'send_email']);
Route::post('/send_user_email/{id}',[AdminController::class,'send_user_email']);
Route::get('/search',[AdminController::class,'searchdata']);
Route::get('/view_recipe',[AdminController::class,'view_recipe']);





Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
Route::get('/product_details/{id}',[HomeController::class,'product_details']);
Route::get('/show_cart',[HomeController::class,'show_cart']);
Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
Route::get('/cash_order',[HomeController::class,'cash_order']);
Route::get('/checkout',[HomeController::class,'checkout']);
Route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);
Route::post('stripe/{totalprice}',[HomeController::class, 'stripePost'])->name('stripe.post');
Route::get('/show_order',[HomeController::class,'show_order']);
Route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);
Route::get('/product_search',[HomeController::class,'product_search']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/shop',[HomeController::class,'shop']);
Route::get('/recipes',[HomeController::class,'recipes']);
Route::get('/recipe_details',[HomeController::class,'recipe_details']);
Route::get('/recipe2',[HomeController::class,'recipe2']);
Route::get('/recipe3',[HomeController::class,'recipe3']);


Route::get('/chat', [OpenAIController::class, 'index']);
Route::post('/chat', [OpenAIController::class, 'getResponse']);


Route::get('/subscribe_form', [HomeController::class, 'subscribe_form']);
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
