<?php 
function predpoklad_1_TS718 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS718 ($timestamp) {
  return 3;
}

function predpoklad_3_TS718 ($timestamp) {
  return 4;
}

function predpoklad_4_TS718 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 1;
}

