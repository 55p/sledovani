<?php 
function predpoklad_1_TS141 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS141 ($timestamp) {
  return 3;
}

function predpoklad_3_TS141 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 4;
}
function predpoklad_4_TS141 ($timestamp) {
  return 1;
}