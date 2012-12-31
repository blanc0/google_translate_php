Google Translate PHP Library
======

This library makes it easy to interact with the (Google Translate API)[https://developers.google.com/translate/]

Usage:

    require_once '/path/to/google_translate_php.phar';
    $translator = new \google_translate_php\GoogleTranslate('YOUR_API_KEY');
    $translation = $translator->translate('すごい','en');

