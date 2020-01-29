<?php

function is_JSON($string) {

  $string_Is_JSON = (is_null(json_decode($string, TRUE))) ? FALSE : TRUE;

  return $string_Is_JSON;
}

?>
