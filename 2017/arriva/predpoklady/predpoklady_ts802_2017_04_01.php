<?php 
function predpoklad_1_TS802 ($timestamp) {
//   $den = date('N', $timestamp);
  return 1;
}

function predpoklad_2_TS802 ($timestamp) {
//   $den = date('N', $timestamp);
  return 0;
}

function predpoklad_3_TS802 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  return 0;
}

function predpoklad_4_TS802 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 0;
}

