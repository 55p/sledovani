<?php 
function predpoklad_1_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 5;
  }
  return 2;
}

function predpoklad_2_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 7;
  }
  if ($den == 7) {
    return 2;
  }
  return 5;
}

function predpoklad_5_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 6;
}

function predpoklad_6_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  return 7;
}

function predpoklad_7_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  return 8;
}

function predpoklad_8_TS203 ($timestamp) {
  return 9;
}

function predpoklad_9_TS203 ($timestamp) {
  return 10;
}

function predpoklad_10_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 8;
  }
  return 11;
}

function predpoklad_11_TS203 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 11;
  }
  return 1;
}

?>