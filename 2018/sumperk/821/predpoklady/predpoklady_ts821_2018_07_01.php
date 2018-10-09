<?php 
function predpoklad_1_TS821 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS821 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 4) {
    return 1;
  }
  if ($den == 3) {
    return 1;
  }
  if ($den == 2) {
    return 1;
  }
  if ($den == 1) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS821 ($timestamp) {
  return 1;
}

