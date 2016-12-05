<?php 
function predpoklad_1_TS304 ($timestamp) {
  return 2;
}

function predpoklad_2_TS304 ($timestamp) {
  return 3;
}

function predpoklad_3_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 5;
  }
  if ($den == 2) {
    return 5;
  }
  if ($den == 3) {
    return 5;
  }
  if ($den == 4) {
    return 5;
  }
  if ($den == 7) {
    return 5;
  }
  return 4;
}

function predpoklad_4_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 4;
  }
  if ($den == 2) {
    return 4;
  }
  if ($den == 3) {
    return 4;
  }
  if ($den == 4) {
    return 4;
  }
  if ($den == 7) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 7;
  }
  if ($den == 6) {
    return 7;
  }
  return 6;
}

function predpoklad_6_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 6;
  }
  if ($den == 6) {
    return 6;
  }
  return 7;
}

function predpoklad_7_TS304 ($timestamp) {
  return 8;
}

function predpoklad_8_TS304 ($timestamp) {
  return 1;
}

