<?php

namespace App\Listeners;

use Telegram\Bot\Objects\PhotoSize;
use Telegram\Bot\Events\UpdateEvent;
use Telegram\Bot\Exceptions\TelegramSDKException;

class ProcessInboundPhoto
{
    /**
     * Handle the event.
     *
     * @param  UpdateEvent  $event
     *
     * @throws TelegramSDKException
     */
    public function handle(UpdateEvent $event)
    {
        $update = $event->update;
        $bot = $event->bot;

        // Download the largest image to the storage/app directory.
        /** @var PhotoSize $photo */
        $photo = collect($update->getMessage()->photo)->last();
        $bot->downloadFile($photo, storage_path('app/photos'));

        // Reply the user.
        $text = 'Thanks for uploading the pic!';
        $bot->sendMessage([
            'chat_id' => $update->getMessage()->chat->id,
            'text'    => $text,
        ]);
    }
}
