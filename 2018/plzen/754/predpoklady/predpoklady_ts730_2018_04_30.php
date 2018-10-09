<?php 
function predpoklad_1_TS730 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS730 ($timestamp) {
  return 3;
}

function predpoklad_3_TS730 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 1;
}

