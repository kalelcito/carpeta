<?php

/**
 * @author Tritec de México
 * @copyright 2011
 */

function ddd($imgt='', $format, $absolute = false)
{
  $img = delmime($imgt);
  return url_for('sf_image', array('format' => $format, 'filepath' =>$img ),$absolute);
}


?>