# Telegram Bot SDK - Laravel Starter

> This repository is an example Laravel application to start developing Telegram Bot using [telegram-bot-sdk](https://github.com/irazasyed/telegram-bot-sdk). 

### Built with 
- Laravel 5.4
- [telegram-bot-sdk](https://github.com/irazasyed/telegram-bot-sdk) 3.0 (Develop Branch)

## Installation

1. Create a new bot project using this boilerplate.

```bash
composer create-project irazasyed/telegram-bot-laravel-starter my_new_bot
```

2. Install [Laravel Valet](https://laravel.com/docs/valet) and use `valet share` to retrieve a HTTPS URL that you can use it to setup a webhook with Telegram for testing. The predefined route is `/bot/webhook`.

3. Edit your `.env` file and set your bot token in `TELEGRAM_BOT_TOKEN=`

4. Modify your bot logic in `app/Controllers/BotController.php` and/or `routes/bot.php`.

5. Build some awesome bots and don't forget to list them on our [bots showcase](https://github.com/irazasyed/telegram-bot-sdk/tree/develop#are-you-using-telegram-bot-sdk).

> Read [docs](https://telegram-bot-sdk.readme.io/docs) to know more about the features and other info.