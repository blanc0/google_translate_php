<?php
namespace google_translate_php\lib;

use google_translate_php\lib\Options,
    google_translate_php\lib\Languages,
    google_translate_php\lib\Error;

/**
 * 
 * @desc    The main Google Translate Class
 *          This can be used for language detection, string translation and fetching a list of supported languages
 *
 * @copyright 2012 Charles Parks
 * @license Apache 2.0
 * @see https://developers.google.com/translate/
 * 
 */
class GoogleTranslate{

	static $REST_TRANSLATE_ENDPOINT='https://www.googleapis.com/language/translate/v2';
    static $REST_DETECT_ENDPOINT='https://www.googleapis.com/language/translate/v2/detect';
    static $REST_LANGUAGES_ENDPOINT='https://www.googleapis.com/language/translate/v2/languages';

    /**
     * @var string $this->key the API Key used for accessing API.
     */
    public $key;

    /**
     * @var bool Whether or not cURL can be leveraged for getting data from Google Translate API.
     */
    private $_use_cURL=true;


    /**
     * @var
     */
    public $query;


    /**
     * @param $key the API Key used in the request.
     */
    function __construct($key){
		if(!function_exists('curl_init')){
            $this->_use_curl = false;
		}
        $this->key = $key;

        if(!$this->_use_cURL){

        }

        $this->ch = curl_init();

	}
	
	function translate($string,$l_to,$l_from=''){
        $this->query='';
        if($l_from!=''){

        }

    }

    /**
     * @desc  uses google translate
     * @param $string
     */
    function detect($string){

	}


    /**
     * @desc    fetches a list of supported languages from the Translate API
     * @return string
     */
    function get_languages(){
        return (
            $this->_use_cURL
                ? ''
                : ''
            );
    }

    function get_query(){
        return $this->query;
    }

    /**
     * @desc  appends the key to the query.
     * @param $query the query being passed to the service.
     * @return string
     */
    private function _append_key($query){
        if(stristr($query,'?')){
            return $query . '&key='.$this->key;
        }else{
            return $query.'?key='.$this->key;
        }

    }
	
	
}
