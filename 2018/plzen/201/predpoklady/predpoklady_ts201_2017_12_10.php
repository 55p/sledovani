<?php 
function predpoklad_1_TS201 ($timestamp) {
  return 2;
}

function predpoklad_2_TS201 ($timestamp) {
  return 3;
}

function predpoklad_3_TS201 ($timestamp) {
  return 4;
}

function predpoklad_4_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  if ($den == 5) {
    return 7;
  }
  return 5;
}

function predpoklad_5_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 6) {
    return 5;
  }
  return 6;
}

function predpoklad_6_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 6;
  }
  return 7;
}

function predpoklad_7_TS201 ($timestamp) {
  return 8;
}

function predpoklad_8_TS201 ($timestamp) {
  return 9;
}

function predpoklad_9_TS201 ($timestamp) {
  return 10;
}

function predpoklad_10_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 12;
  }
  if ($den == 6) {
    return 12;
  }
  return 11;
}

function predpoklad_11_TS201 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 11;
  }
  if ($den == 6) {
    return 11;
  }
  return 12;
}

function predpoklad_12_TS201 ($timestamp) {
  return 1;
}

