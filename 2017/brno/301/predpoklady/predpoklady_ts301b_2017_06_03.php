<?php 
function predpoklad_1_TS301b ($timestamp) {
  return 2;
}

function predpoklad_2_TS301b ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS301b ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 1;
}

