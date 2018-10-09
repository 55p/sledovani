<?php 
function predpoklad_1_TS841 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 4;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS841 ($timestamp) {
  return 3;
}

function predpoklad_3_TS841 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 6) {
    return 3;
  }
  if ($den == 5) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS841 ($timestamp) {
  return 1;
}

