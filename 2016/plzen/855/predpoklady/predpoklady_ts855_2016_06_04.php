<?php 
function predpoklad_1_TS855 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 0;
  }
  return 1;
}

?>