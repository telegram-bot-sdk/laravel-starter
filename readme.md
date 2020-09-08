# Laravel Starter for Telegram Bot SDK

> Laravel starter for [Telegram Bot SDK](https://github.com/telegram-bot-sdk/telegram-bot-sdk).
>
> It comes with sample code to get you started developing Telegram Bots in Laravel.

## Features

- Multi-Bots.
- Webhook.
- Updates Polling.
- Commands.
- Event Listener.

## Built with

- [Laravel](https://laravel.com) 8.x.
- [Telegram Bot SDK](https://github.com/telegram-bot-sdk/telegram-bot-sdk) 4.x.
- [Telegram Bot SDK Laravel](https://github.com/telegram-bot-sdk/laravel) 4.x.

## Installation

1. Create a new bot project using this starter project.

```bash
composer create-project telegram-bot-sdk/laravel-starter mybot
```

2. Install [Laravel Valet](https://laravel.com/docs/valet) and use `valet secure && valet share` to retrieve a HTTPS URL that you can use it to setup a webhook with Telegram for testing.

3. Edit your `.env` file and set your bot token in `TELEGRAM_BOT_TOKEN=` && ngrok hostname in `TELEGRAM_WEBHOOK_DOMAIN=` (Ex: `randomstring.ap.ngrok.io`)

4. Setup the webhook with Telegram by firing the artisan command `php artisan telegram:webhook:setup`.

4. Explore `app` directory for some examples.

5. Build awesome bots and don't forget to list them on our [Awesome Telegram Bots](https://github.com/telegram-bot-sdk/awesome-telegram-bots) list.

> Read [docs](https://telegram-bot-sdk.readme.io/docs) to learn more about Telegram Bot SDK.

## Webhook

If you've fired the above webhook setup artisan command, then a webhook will automatically be set with Telegram.

The webhook URL looks like: `https://YOUR_DOMAIN/telegram/YOUR_BOT_TOKEN/YOUR_BOT_NAME`

Incoming webhook requests from Telegram will automatically be verified, processed, and acknowledged to Telegram for you.
You can listen to various events the SDK dispatches to process inbound updates. You'll find an example in this repo as you explore.

## License

The Laravel Starter is open-sourced software licensed under the MIT license.
