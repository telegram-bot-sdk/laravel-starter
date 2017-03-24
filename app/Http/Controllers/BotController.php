<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;
use Telegram\Bot\Api;

/**
 * Class BotController
 */
class BotController extends Controller
{
    /** @var Api */
    protected $telegram;

    /**
     * BotController constructor.
     *
     * @param Api $telegram
     */
    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    /**
     * Get updates from Telegram.
     */
    public function getUpdates()
    {
        $updates = $this->telegram->getUpdates()->getResult();

        // Do something with the updates
    }

    /**
     * Set a webhook.
     */
    public function setWebhook()
    {
        // Edit this with your webhook URL.
        // You can also use: route('bot-webhook')
        $url = "https://domain.com/bot/webhook";
        $response = $this->telegram->setWebhook()
            ->url($url)
            ->getResult();

        return $response->getDecodedBody();
    }

    /**
     * Remove webhook.
     *
     * @return array
     */
    public function removeWebhook()
    {
        $response = $this->telegram->removeWebhook();

        return $response->getDecodedBody();
    }

    /**
     * Handles incoming webhook updates from Telegram.
     *
     * @return string
     */
    public function webhookHandler()
    {
        // If you're not using commands system, then you can enable this.
//        $update = $this->telegram->getWebhookUpdate();

        // This fetchs webhook update + processes the update through the commands system.
        $update = $this->telegram->commandsHandler(true);


        // Commands handler method returns an Update object.
        // So you can further process $update object
        // to however you want.

        // Below is an example
        $message = $update->getMessage();

        // Triggers when your bot receives text messages like:
        // - Can you inspire me?
        // - Do you have an inspiring quote?
        // - Tell me an inspirational quote
        // - inspire me
        // - Hey bot, tell me an inspiring quote please?
        if(str_contains($message->text, ['inspire', 'inspirational', 'inspiring'])) {
            $this->telegram->sendMessage()
                ->chatId($message->chat->id)
                ->text(Inspiring::quote())
                ->getResult();
        }

        return 'Ok';
    }
}
