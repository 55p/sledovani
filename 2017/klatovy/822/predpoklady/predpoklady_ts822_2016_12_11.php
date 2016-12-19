<?php 
function predpoklad_1_TS822 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  if ($den == 5) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS822 ($timestamp) {
  return 3;
}

function predpoklad_3_TS822 ($timestamp) {
  return 4;
}

function predpoklad_4_TS822 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 5) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS822 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 6) {
    return 3;
  }
  return 1;
}

