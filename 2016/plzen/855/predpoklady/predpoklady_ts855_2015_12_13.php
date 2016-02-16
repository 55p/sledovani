<?php 
function predpoklad_1_TS855 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 2;
}

?>