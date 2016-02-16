<?php 
function predpoklad_1_TS143 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 3) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 2;
}

?>