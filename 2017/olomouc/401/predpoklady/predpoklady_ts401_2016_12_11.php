<?php 
function predpoklad_1_TS401 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS401 ($timestamp) {
  return 3;
}

function predpoklad_3_TS401 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 2;
  }
  if ($den == 6) {
    return 5;
  }
  if ($den == 5) {
    return 4;
  }
  return 4;
}

function predpoklad_4_TS401 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 9;
  }
  if ($den == 6) {
    return 4;
  }
  if ($den == 7) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS401 ($timestamp) {
  return 6;
}

function predpoklad_6_TS401 ($timestamp) {
  return 7;
}

function predpoklad_7_TS401 ($timestamp) {
  return 8;
}

function predpoklad_8_TS401 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 5) {
    return 2;
  }
  return 9;
}

function predpoklad_9_TS401 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 5;
  }
  if ($den == 6) {
    return 9;
  }
  return 1;
}

