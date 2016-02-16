<?php 
function predpoklad_1_TS601 ($timestamp) {
  return 2;
}

function predpoklad_2_TS601 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS601 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 3;
  }
  return 1;
}

?>