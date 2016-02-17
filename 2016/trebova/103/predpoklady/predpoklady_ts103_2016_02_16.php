<?php 
function predpoklad_1_TS103 ($timestamp) {
  return 2;
}

function predpoklad_2_TS103 ($timestamp) {
  return 3;
}

function predpoklad_3_TS103 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 6) {
    return 7;
  }
  return 4;
}

function predpoklad_4_TS103 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 6) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS103 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  return 7;
}

function predpoklad_6_TS103 ($timestamp) {
  return 7;
}

function predpoklad_7_TS103 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 10;
  }
  if ($den == 6) {
    return 10;
  }
  return 8;
}

function predpoklad_8_TS103 ($timestamp) {
  return 9;
}

function predpoklad_9_TS103 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 8;
  }
  if ($den == 6) {
    return 8;
  }
  return 10;
}

function predpoklad_10_TS103 ($timestamp) {
  return 11;
}

function predpoklad_11_TS103 ($timestamp) {
  return 1;
}

?>