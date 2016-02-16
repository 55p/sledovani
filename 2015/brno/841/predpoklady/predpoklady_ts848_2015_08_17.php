<?php 
function predpoklad_1_TS848 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS848 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS848 ($timestamp) {
  return 1;
}

?>