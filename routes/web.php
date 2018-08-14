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
    return view('welcome');
});

Route::post('/sendMessage', [
    'as'   => 'sendMessage',
    'uses' => 'TelegramBotController@sendMessage'
]);

Route::post('/' . env('TELEGRAM_BOT_TOKEN') . '/webhook', function () {
    $update = Telegram::getWebhookUpdates();
    $chat_id = $update->getMessage()->getChat()->getId();
    $text = $update->getMessage()->getText();

    \Illuminate\Support\Facades\Log::info('AAAaa');
});
