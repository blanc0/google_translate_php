<?php
namespace google_translate_php\lib;
/**
 * @desc    A list of available languages for the Google Translate API and functions to access them
 * @see     https://developers.google.com/translate/v2/using_rest#language-params
 */
class Languages{
	public static $CODES=array(
				'Afrikaans'=>'af',
				'Albanian'=>'sq',
				'Arabic'=>'ar',
				'Azerbaijani'=>'az',
				'Basque'=>'eu',
				'Bengali'=>'bn',
				'Belarusian'=>'be',
				'Bulgarian'=>'bg',
				'Catalan'=>'ca',
				'Chinese Simplified'=>'zh-CN',
				'Chinese Traditional'=>'zh-TW',
				'Croatian'=>'hr',
				'Czech'=>'cs',
				'Danish'=>'da',
				'Dutch'=>'nl',
				'English'=>'en',
				'Esperanto'=>'eo',
				'Estonian'=>'et',
				'Filipino'=>'tl',
				'Finnish'=>'fi',
				'French'=>'fr',
				'Galician'=>'gl',
				'Georgian'=>'ka',
				'German'=>'de',
				'Greek'=>'el',
				'Gujarati'=>'gu',
				'Haitian Creole'=>'ht',
				'Hebrew'=>'iw',
				'Hindi'=>'hi',
				'Hungarian'=>'hu',
				'Icelandic'=>'is',
				'Indonesian'=>'id',
				'Irish'=>'ga',
				'Italian'=>'it',
				'Japanese'=>'ja',
				'Kannada'=>'kn',
				'Korean'=>'ko',
				'Latin'=>'la',
				'Latvian'=>'lv',
				'Lithuanian'=>'lt',
				'Macedonian'=>'mk',
				'Malay'=>'ms',
				'Maltese'=>'mt',
				'Norwegian'=>'no',
				'Persian'=>'fa',
				'Polish'=>'pl',
				'Portuguese'=>'pt',
				'Romanian'=>'ro',
				'Russian'=>'ru',
				'Serbian'=>'sr',
				'Slovak'=>'sk',
				'Slovenian'=>'sl',
				'Spanish'=>'es',
				'Swahili'=>'sw',
				'Swedish'=>'sv',
				'Tamil'=>'ta',
				'Telugu'=>'te',
				'Thai'=>'th',
				'Turkish'=>'tr',
				'Ukrainian'=>'uk',
				'Urdu'=>'ur',
				'Vietnamese'=>'vi',
				'Welsh'=>'cy',
				'Yiddish'=>'yif'
			);	
			
			
			
			/**
			 * @desc	Fetches the language code associated with the language name
			 * @var 	string $language_name	The language name we would like to fetch the associated language code for.
			 * @return	string or FALSE if no language code is found for the passed $language_name
			 *
			 */
			public static function get_language_code($language_name){
				foreach(self::$CODES as $k=>$v){
					if(strtolower($k) == strtolower($language_name)){
						return $v;
					}
				}
				return FALSE;
			}
			
			
			/**
			 * @desc	Fetches the language name associated with the language code passed.
			 * @var 	string $language_code	The language name we would like to fetch the associated language code for.
			 * @return	string or FALSE if language code isn't  found
			 *
			 */
			public static function get_language_name($language_code){
				foreach(self::$CODES as $k=>$v){
					if(strtolower($v) == strtolower($language_code)){
						return $k;
					}
				}
				return FALSE;				
			}
}
