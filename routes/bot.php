<?php

/*
|--------------------------------------------------------------------------
| Manual Updates Route
|--------------------------------------------------------------------------
| This route is used to fetch bot updates manually from Telegram,
|
| NOTE: THIS WILL NOT WORK IF WEBHOOK IS ENABLED.
*/
Route::get('/bot/updates', 'BotController@getUpdates')->name('bot-updates');

/*
|--------------------------------------------------------------------------
| Set Webhook
|--------------------------------------------------------------------------
| This route is used to set your webhook with Telegram,
| just request from your browser once and then disable it.
|
| Example: http://domain.com/bot/set-webhook
*/
Route::get('/bot/set-webhook', 'BotController@setWebhook')->name('bot-set-webhook');

/*
|--------------------------------------------------------------------------
| Remove Webhook
|--------------------------------------------------------------------------
| This route is used to remove your webhook with Telegram,
| just request from your browser once and then disable it.
|
| Example: http://domain.com/bot/remove-webhook
*/
Route::get('/bot/remove-webhook', 'BotController@removeWebhook')->name('bot-remove-webhook');

/*
|--------------------------------------------------------------------------
| Webhook (Incoming Handler)
|--------------------------------------------------------------------------
| This route handles incoming webhook updates.
|
| !! IMPORTANT !!
| THIS IS AN INSECURE ENDPOINT FOR DEMO PURPOSES,
| MAKE SURE TO SECURE THIS ENDPOINT, EXAMPLE: "/bot/<SECRET-KEY>/webhook"
|
| THEN SET THAT WEBHOOK WITH TELEGRAM.
| SO YOU CAN BE SURE THE UPDATES ARE COMING FROM TELEGRAM ONLY.
*/
Route::post('/bot/webhook', 'BotController@webhookHandler')->name('bot-webhook');