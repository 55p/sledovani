<?php 
function predpoklad_1_TS871 ($timestamp) {
  return 2;
}

function predpoklad_2_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS871 ($timestamp) {
  return 4;
}

function predpoklad_4_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 7;
  }
  if ($den == 2) {
    return 7;
  }
  if ($den == 3) {
    return 7;
  }
  if ($den == 4) {
    return 7;
  }
  if ($den == 6) {
    return 3;
  }
  return 5;
}

function predpoklad_5_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  return 6;
}

function predpoklad_6_TS871 ($timestamp) {
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
  if ($den == 6) {
    return 6;
  }
  if ($den == 5) {
    return 1;
  }
  return 7;
}

function predpoklad_7_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 8;
}

function predpoklad_8_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 8;
  }
  if ($den == 5) {
    return 7;
  }
  return 1;
}

