<?php 
function predpoklad_1_TS880 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 3) {
    return 1;
  }
  if ($den == 5) {
    return 1;
  }
  if ($den == 7) {
    return 3;
  }
  if ($den == 6) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS880 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS880 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 7) {
    return 2;
  }
  return 4;
}

function predpoklad_4_TS880 ($timestamp) {
  return 5;
}

function predpoklad_5_TS880 ($timestamp) {
  return 6;
}

function predpoklad_6_TS880 ($timestamp) {
  return 7;
}

function predpoklad_7_TS880 ($timestamp) {
  return 8;
}

function predpoklad_8_TS880 ($timestamp) {
  return 9;
}

function predpoklad_9_TS880 ($timestamp) {
  return 10;
}

function predpoklad_10_TS880 ($timestamp) {
  return 11;
}

function predpoklad_11_TS880 ($timestamp) {
  return 12;
}

function predpoklad_12_TS880 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 3) {
    return 2;
  }
  if ($den == 5) {
    return 2;
  }
  return 1;
}

