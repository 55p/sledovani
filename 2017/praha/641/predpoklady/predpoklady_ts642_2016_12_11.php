<?php 
function predpoklad_1_TS642 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 2) {
    return 5;
  }
  if ($den == 5) {
    return 5;
  }
  return 2;
}

function predpoklad_2_TS642 ($timestamp) {
  return 3;
}

function predpoklad_3_TS642 ($timestamp) {
  return 4;
}

function predpoklad_4_TS642 ($timestamp) {
  $den = date('N', $timestamp);
  return 1;
}

function predpoklad_5_TS642 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 5;
  }
  if ($den == 3) {
    return 5;
  }
  if ($den == 4) {
    return 5;
  }
  if ($den == 6) {
    return 5;
  }
  if ($den == 7) {
    return 5;
  }
  if ($den == 2) {
    return 2;
  }
  if ($den == 5) {
    return 2;
  }
  return 1;
}

?>