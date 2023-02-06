<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('formater')) {
    function formater($money) {
        $return=null;
        $val=array();
        $string =strval( $money );
        $tab=str_split($string);
        $number=strlen($string)-1;
        $compte=1;
        while($number<=0){
            $return = $tab[$number].$return;
            if($compte==3){
                $return .= " ";
                $compte=1;
            }
            $number--;
            $compte++;
        }
        return $return;

    }
     
}