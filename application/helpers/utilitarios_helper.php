<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('zero_fill_pk'))
{
    function zero_fill_pk($num, $zerofill = 5)
    {
       return str_pad($num, $zerofill, '0', STR_PAD_LEFT);
 
    }
}

if(!function_exists('formato_fecha'))
{
    function formato_fecha($fecha,$orden,$simbolo){
      $nuevafecha="";
      $arr_dat=explode('/',$fecha);
      if ($orden=='A'){
            $nuevafecha=$arr_dat[0]."$simbolo".$arr_dat[1]."$simbolo".$arr_dat[2];  
      } else{
        $nuevafecha=$arr_dat[2]."$simbolo".$arr_dat[1]."$simbolo".$arr_dat[0];
      }
      return  $nuevafecha;
    }
}