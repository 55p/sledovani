<?php 
function predpoklad_1_TS321 ($timestamp) {
  return 2;
}

function predpoklad_2_TS321 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS321 ($timestamp) {
  return 4;
}

function predpoklad_4_TS321 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 1;
}

