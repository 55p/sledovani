<?php 
function predpoklad_1_TS849 ($timestamp) {
  return 2;
}

function predpoklad_2_TS849 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS849 ($timestamp) {
  return 4;
}

function predpoklad_4_TS849 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  if ($den == 1) {
    return 1;
  }
  if ($den == 2) {
    return 1;
  }
  if ($den == 3) {
    return 1;
  }
  if ($den == 4) {
    return 1;
  }
  if ($den == 5) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 1;
}

