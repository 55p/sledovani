<?php 
function predpoklad_1_TS844 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS844 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS844 ($timestamp) {
  return 4;
}

function predpoklad_4_TS844 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 1;
}

?>