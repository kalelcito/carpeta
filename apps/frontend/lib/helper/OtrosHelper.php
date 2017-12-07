<?php

/**
 * @author Tritec de México
 * @copyright 2011
 */

function sino($valor)
{
  if($valor==1){
      echo sfConfig::get('app_template_si');
  }else{
      echo sfConfig::get('app_template_no');
  }
} 
?>