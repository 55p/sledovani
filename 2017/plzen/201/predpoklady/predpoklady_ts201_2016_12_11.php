<?php 
function predpoklad_1_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 5;
  }
  if ($den == 6) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 4;
}

function predpoklad_4_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS201 ($timestamp) {
  return 1;
}

