<?php 
function predpoklad_1_TS845 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  if ($den == 5) {
    return 5;
  }
  return 2;
}

function predpoklad_2_TS845 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS845 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 5;
  }
  if ($den == 6) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS845 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 7) {
    return 1;
  }
  if ($den == 6) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS845 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 2;
  }
  if ($den == 6) {
    return 5;
  }
  return 1;
}

