<?php 
function predpoklad_1_TS834 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS834 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS834 ($timestamp) {
  if ($den == 5) {
    return 3;
  }
  if ($den == 6) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS834 ($timestamp) {
  return 5; 
}

function predpoklad_5_TS834 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 6) {
    return 4;
  }
  return 1;
}

?>