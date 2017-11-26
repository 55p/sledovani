<?php 
function predpoklad_1_TS302 ($timestamp) {
  return 2;
}

function predpoklad_2_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS302 ($timestamp) {
  return 5;
}

function predpoklad_5_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 7;
  }
  if ($den == 6) {
    return 8;
  }
  return 6;
}

function predpoklad_6_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  if ($den == 7) {
    return 6;
  }
  return 7;
}

function predpoklad_7_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 7;
  }
  return 8;
}

function predpoklad_8_TS302 ($timestamp) {
  return 9;
}

function predpoklad_9_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 10;
}

function predpoklad_10_TS302 ($timestamp) {
  return 11;
}

function predpoklad_11_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 10;
  }
  if ($den == 6) {
    return 10;
  }
  return 12;
}

function predpoklad_12_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 12;
  }
  if ($den == 6) {
    return 12;
  }
  return 1;
}

