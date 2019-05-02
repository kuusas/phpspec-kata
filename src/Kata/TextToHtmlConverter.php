<?php

namespace Kata;

class TextToHtmlConverter
{
    public function toHtml(string $text): string
    {
        return '<p>'. $text . '</p>';
    }
}
