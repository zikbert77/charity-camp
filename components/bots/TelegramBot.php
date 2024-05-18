<?php

namespace app\components\bots;

use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;
use Throwable;
use Yii;

class TelegramBot
{
    /**
     * @throws TelegramException|\Exception
     */
    public static function sendMessage(string $msg, bool $isException = false)
    {
        new Telegram(Yii::$app->params['tg_token'], Yii::$app->params['tg_bot_username']);
        $response = Request::sendMessage([
            'chat_id' => Yii::$app->params[$isException ? 'tg_bot_exception_chat_id' : 'tg_bot_chat_id'],
            'text' => $msg,
            'parse_mode' => 'html'
        ]);

        if (!$response->isOk()) {
            throw new \Exception($response->printError(true));
        }
    }

    public static function sendException($e)
    {
        try {
            self::sendMessage($e, true);
        } catch (Throwable $exception) {
            //writ log
        }
    }
}