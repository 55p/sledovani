<?php 
function predpoklad_1_TS850 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS850 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS850 ($timestamp) {
  return 1;
}

