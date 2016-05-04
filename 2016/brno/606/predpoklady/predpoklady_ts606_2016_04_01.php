<?php 
function predpoklad_1_TS606 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  return 2;
}

function predpoklad_2_TS606 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  if ($den == 5) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS606 ($timestamp) {
  return 4;
}

function predpoklad_4_TS606 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  return 5;
}

function predpoklad_5_TS606 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 1;
}

?>