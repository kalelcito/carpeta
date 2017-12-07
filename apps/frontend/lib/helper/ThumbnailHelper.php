<?php

/**
 * @author Tritec de México
 * @copyright 2011
 */

function thumbp($imgt='', $format, $absolute = false)
{
  if($imgt==''){$imgt="lectodefault.jpg.jpg";}
  $img = delmime($imgt);
  return url_for('sf_image', array('format' => $format, 'filepath' =>$img ),$absolute);
}

function thumbi($imgt='', $format, $absolute = false,$alt='',$size='',$clase='',$estilo='')
{
  $img = delmime($imgt);
  return image_tag(url_for('sf_image', array('format' => $format, 'filepath' =>$img ),$absolute), array('absolute'=>$absolute,'alt_title'=>$alt,'size'=>$size,'class'=>$clase,'style'=>$estilo));
}

function delmime($im=''){
  $tbmime = array('.jpg','.png','.gif','.jpeg');
  return str_replace($tbmime, '', $im);  
} 
?>