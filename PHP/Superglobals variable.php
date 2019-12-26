<?php

  $x = 5;
  $y = 10;
  function sum(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
  sum();
  echo $z;

 ?>
