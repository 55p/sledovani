<?php 
function predpoklad_1_TS850 ($timestamp) {
  return 2;
}

function predpoklad_2_TS850 ($timestamp) {
  return 3;
}

function predpoklad_3_TS850 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS850 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 1;
}

