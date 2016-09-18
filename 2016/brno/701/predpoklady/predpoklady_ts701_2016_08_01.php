<?php 
function predpoklad_1_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6)
    return 1;
  return 2;
}

function predpoklad_2_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6)
    return 2;
  return 1;
}

function predpoklad_3_TS701 ($timestamp) {
  return 3;
}

?>