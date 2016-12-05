<?php 
function predpoklad_1_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  if ($den == 5) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 2;
  }
  if ($den == 6) {
    return 3;
  }
  return 1;
}

