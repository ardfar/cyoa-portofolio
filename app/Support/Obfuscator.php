<?php

namespace App\Support;

class Obfuscator
{
    public static function email(string $email, ?string $class = null, ?string $label = null): string
    {
        $encoded = base64_encode($email);
        $safe = str_replace(['@', '.'], [' [at] ', ' [dot] '], $email);
        $cls = trim((string) $class);
        $attrClass = $cls !== '' ? ' ' . htmlspecialchars($cls, ENT_QUOTES, 'UTF-8') : '';
        $labelAttr = $label !== null ? ' data-label="' . base64_encode($label) . '"' : '';
        return '<span class="obf-email' . $attrClass . '" data-v="' . $encoded . '"' . $labelAttr . '></span><noscript>' . htmlspecialchars($safe, ENT_QUOTES, 'UTF-8') . '</noscript>';
    }

    public static function phone(string $phone, string $type = 'tel', ?string $class = null, ?string $label = null): string
    {
        $digits = preg_replace('/\D+/', '', $phone);
        $encoded = base64_encode($digits);
        $cls = trim((string) $class);
        $attrClass = $cls !== '' ? ' ' . htmlspecialchars($cls, ENT_QUOTES, 'UTF-8') : '';
        $labelAttr = $label !== null ? ' data-label="' . base64_encode($label) . '"' : '';
        $typeAttr = ' data-type="' . htmlspecialchars($type, ENT_QUOTES, 'UTF-8') . '"';
        return '<span class="obf-phone' . $attrClass . '" data-v="' . $encoded . '"' . $typeAttr . $labelAttr . '></span><noscript>' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</noscript>';
    }
}