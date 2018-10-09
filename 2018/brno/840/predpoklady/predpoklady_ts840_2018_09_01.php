<?php 
function predpoklad_1_TS840 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS840 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  if ($den == 5) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS840 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 3;
  }
  if ($den == 5) {
    return 2;
  }
  return 1;
}

