<?php
namespace App\Utils;

use stdClass;
use Illuminate\Support\Collection;

class Helper{

    public static $_THE_ID_IS_NOT_VALID_MESSAGE     = "The ID is not valid";
    public static $_INSERT_SUCCESSFULLY_MESSAGE     = "The # has been stored successfully";
    public static $_UPDATE_SUCCESSFULLY_MESSAGE     = "The # has been updated succesfully";
    public static $_DELETE_SUCCESSFULLY_MESSAGE     = "The # has been deleted succesfully";

    public static function validationErrorsToString($errArray) {
        $valArr = array();
        foreach ($errArray->toArray() as $key => $value) {
            $errStr = $value[0];
            array_push($valArr, $errStr);
        }
        if(!empty($valArr)){
            $errStrFinal = implode('<br/>', $valArr);
        }
        return $errStrFinal;
    }

    public static function toRpFormat( $number ){
        return number_format( $number , 0 , ',' , '.' );
    }

    public static function fromRpFormat( $value ){
        $value = trim(str_replace(".", "", $value));
        return $value;
    }

    public static function pickerDateToMySqlDate( $str_date ){
        $result = "";
        $arr_date = explode("/", $str_date);
        if( count($arr_date)==3 ){
            $result = $arr_date[2].'-'.$arr_date[0].'-'.$arr_date[1];
        }
        return $result;
    }

    public static function mySqlDateToPickerDate( $str_date ){
        $result = "";
        $str_date = substr($str_date, 0, 10);
        $arr_date = explode("-", $str_date);
        if( count($arr_date)==3 ){
            $result = $arr_date[1].'/'.$arr_date[2].'/'.$arr_date[0];
        }
        return $result;
    }

    public static function array_to_obj($array, $obj){
      foreach ($array as $key => $value){
        if (is_array($value)){
          $obj->$key = new stdClass();
          array_to_obj($value, $obj->$key);
        }
        else{
          $obj->$key = $value;
        }
      }
      return $obj;
    }

    public static function arrayToObject($array){
      $object = new stdClass();
      return Helper::array_to_obj($array,$object);
    }

    public static function getUserIP()
    {
      $client  = @$_SERVER['HTTP_CLIENT_IP'];
      $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
      $remote  = $_SERVER['REMOTE_ADDR'];

      if(filter_var($client, FILTER_VALIDATE_IP))
      {
          $ip = $client;
      }
      elseif(filter_var($forward, FILTER_VALIDATE_IP))
      {
          $ip = $forward;
      }
      else
      {
          $ip = $remote;
      }

      return $ip;
    }

    public static function token()
    {
        return "CB32799D65866-bengkel-online-putra-16C5A752876D8";
    }

    // public static function firebaseApiKey()
    // {
    //     return "AAAAQDcY1Pc:APA91bFb0zrXKgGUXdYB-W-YRbGLbUh4QmjGCof8C1CdBFzsrh7LCXVkSs5hSYtRI22PCX-hE5mxmkfucOicR86fodsMGg7I10GJXydpQ3a0gn4YJ8YiWqqfXTz2AiARxbJEoFn3Jlqv";
    // }

    public static function generateRandomString($length = 10)
    {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
