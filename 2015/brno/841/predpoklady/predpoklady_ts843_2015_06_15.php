<?php 
function predpoklad_1_TS843 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS843 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS843 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS843 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 1;
}

?>