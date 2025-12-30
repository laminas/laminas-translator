<?php

declare(strict_types=1);

namespace Laminas\Translator;

interface TranslatorInterface
{
    public const DEFAULT_TEXT_DOMAIN = 'default';

    /**
     * Translate a message.
     */
    public function translate(
        string $message,
        string $textDomain = self::DEFAULT_TEXT_DOMAIN,
        ?string $locale = null,
    ): string;

    /**
     * Translate a plural message.
     */
    public function translatePlural(
        string $singular,
        string $plural,
        int $number,
        string $textDomain = self::DEFAULT_TEXT_DOMAIN,
        ?string $locale = null
    ): string;
}
