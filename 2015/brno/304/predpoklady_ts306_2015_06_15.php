<?php 
function predpoklad_1_TS306 ($timestamp) {
  return 2;
}

function predpoklad_2_TS306 ($timestamp) {
  return 3;
}

function predpoklad_3_TS306 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 8;
  }
  if ($den == 7) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS306 ($timestamp) {
  return 5;
}

function predpoklad_5_TS306 ($timestamp) {
  return 6;
}

function predpoklad_6_TS306 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 7) {
    return 4;
  }
  return 7;
}

function predpoklad_7_TS306 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 8;
}

function predpoklad_8_TS306 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 7) {
    return 7;
  }
  return 9;
}

function predpoklad_9_TS306 ($timestamp) {
  return 10;
}

function predpoklad_10_TS306 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 7) {
    return 9;
  }
  return 1;
}

?>