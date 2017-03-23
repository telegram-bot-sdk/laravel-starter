<?php

namespace App\Commands;

use Telegram\Bot\Commands\Command;


/**
 * Class StartCommand
 */
class StartCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'start';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['signup'];

    /**
     * @var string Command Description
     */
    protected $description = 'Start Command to get you started';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        $update = $this->getUpdate();

        $name = $update->getMessage()->from->firstName;
        $text = "Hello, $name! Welcome to our bot!\nType /help to get a list of available commands.";

        $this->replyWithMessage(['text' => $text]);
    }
}