<?php

declare(strict_types=1);

namespace Laminas\Translator;

interface TranslatorInterface
{
    /**
     * Translate a message.
     */
    public function translate(
        string $message,
        string $textDomain = 'default',
        ?string $locale = null,
    ): string;

    /**
     * Translate a plural message.
     */
    public function translatePlural(
        string $singular,
        string $plural,
        int $number,
        string $textDomain = 'default',
        ?string $locale = null
    ): string;
}
