<?php 
function predpoklad_1_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 1) {
    return 4;
  }
  if ($den == 2) {
    return 4;
  }
  if ($den == 3) {
    return 4;
  }
  if ($den == 4) {
    return 4;
  }
  if ($den == 5) {
    return 4;
  }
  if ($den == 7) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  return 3;
}

function predpoklad_4_TS701 ($timestamp) {
  return 1;
}

