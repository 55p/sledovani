<?php 
function predpoklad_1_TS804 ($timestamp) {
  return 2;
}

function predpoklad_2_TS804 ($timestamp) {
  return 3;
}

function predpoklad_3_TS804 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS804 ($timestamp) {
  return 5;
}

function predpoklad_5_TS804 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  if ($den == 7) {
    return 4;
  }
  return 1;
}

