<?php 
function predpoklad_1_TS802 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS802 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS802 ($timestamp) {
  return 1;
}

