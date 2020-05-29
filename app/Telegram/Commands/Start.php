<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
use Throwable;

class Start extends Command
{
    protected string $description = 'Start command to process initial request!';

    /**
     * Execute the bot command.
     */
    public function handle()
    {
        $message = $this->getUpdate()->getMessage();
        $firstName = $message->from->first_name;

        $text = "Hello, $firstName! Welcome to our bot!\nType /help to get a list of available commands.";

        $this->bot->sendMessage([
            'chat_id' => $message->chat->id,
            'text'    => $text,
        ]);
    }

   /**
    * Triggered on failure.
    *
    * @param array     $arguments
    * @param Throwable $exception
    */
    public function failed(array $arguments, Throwable $exception)
    {
        //
    }
}
