<?php 
function predpoklad_1_TS823 ($timestamp) {
  return 2;
}

function predpoklad_2_TS823 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS823 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS823 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 5;
  }
  return 5;
}

function predpoklad_5_TS823 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 5) {
    return 5;
  }
  return 1;
}

