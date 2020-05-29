<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

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
    return view('welcome');
});

// Example for polling for updates (non-webhook).

// URL: /telegram/updates/default (bot = name from config).
Route::get('/telegram/updates/{bot?}', function ($bot = 'default') {
    // This method will fetch updates,
    // fire relevant events and,
    // confirm we've received the updates with Telegram.
    $updates = Telegram::bot($bot)->listen();

    // You can do something with the fetched array of update objects.

    // NOTE: You won't be able to fetch updates if a webhook is set.
    // Remove webhook before using this method.
});
