<?php 
function predpoklad_1_TS202 ($timestamp) {
  return 2;
}

function predpoklad_2_TS202 ($timestamp) {
  return 3;
}

function predpoklad_3_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 1;
}

?>