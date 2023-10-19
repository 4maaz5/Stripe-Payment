<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(StripeController::class)->group(function(){
    Route::get('show', 'stripe')->name('stripe.index');
    Route::get('show/checkout','stripeCheckout')->name('stripe.checkout');
    Route::get('show/checkout/success','stripeCheckoutSuccess')->name('stripe.checkout.success');
});

