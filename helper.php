<?php

if( class_exists('Unirest\Exception') === false ) {
    require_once( dirname(__FILE__).'/mashape/unirest-php/src/Unirest.php' );
}

/**
 * Helper class for Sagenda Calendar module
 * 
 * @package    Sagenda.Calendar
 * @subpackage Modules
 * @link       https://www.sagenda.com
 * @license    GNU/GPL, see LICENSE.php
 */

class ModSagendaCalendarHelper
{
  
/**
  * @var string - url of the API
  */
   protected $apiUrl = 'https://sagenda.net/api/'; //Live Server

   public function convertAPITokenToBearerToken($token)
   {
     try {
         $body = "grant_type=api_token&api_token=".$token;
         $response = Unirest\Request::post($this->apiUrl."token",
         array(
         "Content-Type" => "application/json",
         "Accept" => "application/json"
         ),
         $body);
         }
     catch (Exception $e) {
           echo "Oups, I did it again : ".$e->getMessage();
         }
         //print_r($response->body->access_token);
     return $response->body->access_token;
     }
}