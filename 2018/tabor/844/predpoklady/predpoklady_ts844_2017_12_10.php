<?php 
function predpoklad_1_TS844 ($timestamp) {
  return 2;
}

function predpoklad_2_TS844 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS844 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 6) {
    return 5;
  }
  return 4;
}

function predpoklad_4_TS844 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 6;
  }
  if ($den == 6) {
    return 4;
  }
  if ($den == 5) {
    return 3;
  }
  return 5;
}

function predpoklad_5_TS844 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 6) {
    return 3;
  }
  return 6;
}

function predpoklad_6_TS844 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 6;
  }
  if ($den == 6) {
    return 6;
  }
  return 1;
}

