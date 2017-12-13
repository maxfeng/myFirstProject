<?php
namespace AppBundle\Utils;

class YStoreApi {

    private $_apiKey;
    private $_secret;
    private $_queryString;

    function __construct($api_key, $secret)
    {
        $this->_apiKey = $api_key;
        $this->_secret = $secret;
        $this->_queryString = "";
    }
    
    private function _getSignature($content, $api_key){
        $hash = hash_hmac("sha1" , $content , $api_key);
        return $hash;
    }

    public function AddQueryString($key, $value){
        $this->_queryString .= "&{$key}={$value}";
    }
    
    public function GetSignature($api_parameters){
        
        foreach( $api_parameters as $key => $value )
        {
            if( $key != "Signature" )
            {
                $this->AddQueryString($key, $value);
            }
        }
        
        $secret  = $this->_secret;
        $queryString = trim($this->_queryString, '&');

        $signature = $this->_getSignature($queryString, $secret);
      
        return $signature;
    }
}
