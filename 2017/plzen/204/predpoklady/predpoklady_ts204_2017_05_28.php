<?php 
function predpoklad_1_TS204 ($timestamp) {
  return 2;
}

function predpoklad_2_TS204 ($timestamp) {
  return 3;
}

function predpoklad_3_TS204 ($timestamp) {
  return 4;
}

function predpoklad_4_TS204 ($timestamp) {
  return 5;
}

function predpoklad_5_TS204 ($timestamp) {
  return 6;
}

function predpoklad_6_TS204 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 8;
  }
  if ($den == 5) {
    return 9;
  }
  return 7;
}

function predpoklad_7_TS204 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 7;
  }
  if ($den == 6) {
    return 7;
  }
  return 8;
}

function predpoklad_8_TS204 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 8;
  }
  return 9;
}

function predpoklad_9_TS204 ($timestamp) {
  return 10;
}

function predpoklad_10_TS204 ($timestamp) {
  return 11;
}

function predpoklad_11_TS204 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 14;
  }
  if ($den == 6) {
    return 14;
  }
  return 12;
}

function predpoklad_12_TS204 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 12;
  }
  if ($den == 6) {
    return 12;
  }
  return 13;
}

function predpoklad_13_TS204 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 13;
  }
  if ($den == 6) {
    return 13;
  }
  return 14;
}

function predpoklad_14_TS204 ($timestamp) {
  return 1;
}

