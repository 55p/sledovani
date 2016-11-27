<?php 
function predpoklad_1_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  return 2;
}

function predpoklad_2_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  return 1;
}

?>