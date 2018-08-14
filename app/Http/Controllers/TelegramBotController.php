<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function sendMessage(Request $request)
    {
        dd($request->all());
        $mess = view('telegram-message.new-request', [
            'name'  => $request->get('name'),
            'email' => $request->get('email')
        ])->render();
  
        
        $response = Telegram::sendMessage([
            'chat_id'    => env('TELEGRAM_CHAT_ID'),
            'text'       => $mess,
            'parse_mode' => 'HTML'
        ]);

        $messageId = $response->getMessageId();
        dd($messageId);
    }
}
