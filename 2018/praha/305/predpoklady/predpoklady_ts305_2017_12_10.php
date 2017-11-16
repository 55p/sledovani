<?php 
function predpoklad_1_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS305 ($timestamp) {
  return 4;
}

function predpoklad_4_TS305 ($timestamp) {
  return 5;
}

function predpoklad_5_TS305 ($timestamp) {
  return 1;
}

