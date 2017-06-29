<?php 
function predpoklad_1_TS123 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS123 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  if ($den == 6) {
    return 2;
  }
  return 4;
}

function predpoklad_3_TS123 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  if ($den == 6) {
    return 3;
  }
  return 3;
}

function predpoklad_4_TS123 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  if ($den == 6) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS123 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  if ($den == 6) {
    return 5;
  }
  return 1;
}

?>