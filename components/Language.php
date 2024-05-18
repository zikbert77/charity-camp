<?php

namespace app\components;

use app\components\bots\TelegramBot;

class Language
{
    const UA = 'uk-UA';
    const EN = 'en-Us';

    const DEFAULT = self::EN;

    const TITLES = [
        self::EN => 'English',
        self::UA => 'Українська',
    ];

    const ICON_CODES = [
        self::EN => 'us',
        self::UA => 'ua',
    ];

    const AVAILABLE_LANGUAGE_KEYS = [
        self::EN,
        self::UA,
    ];

    public static function getSelected(): string
    {
        $selectedLanguage = \Yii::$app->request->cookies->get('language')->value ?? null;
        if (empty($selectedLanguage)) {
            $selectedLanguage = self::getDefaultLocationByIp();
            if (empty($selectedLanguage) || !in_array($selectedLanguage, self::AVAILABLE_LANGUAGE_KEYS)) {
                $selectedLanguage = self::DEFAULT;
            }
        }

        return $selectedLanguage;
    }

    public static function getDefaultLocationByIp(): ?string
    {
        try {
            $ip = $_SERVER['REMOTE_ADDR'] ?? null;
            $data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
            if (!empty($data->geoplugin_countryCode) && $data->geoplugin_countryCode == 'UA') {
                return self::UA;
            }
        } catch (\Throwable $exception) {
            TelegramBot::sendException($exception);
        }

        return null;
    }

    public static function getIconCode(string $languageKey): string
    {
        return self::ICON_CODES[$languageKey] ?? '';
    }

    public static function getTitle(string $languageKey): string
    {
        return self::TITLES[$languageKey] ?? '';
    }
}