<?php 
function predpoklad_1_TS303 ($timestamp) {
  return 2;
}

function predpoklad_2_TS303 ($timestamp) {
  return 3;
}

function predpoklad_3_TS303 ($timestamp) {
  return 4;
}

function predpoklad_4_TS303 ($timestamp) {
  return 5;
}

function predpoklad_5_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 8;
  }
  if ($den == 7) {
    return 8;
  }
  return 6;
}

function predpoklad_6_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  if ($den == 7) {
    return 6;
  }
  return 7;
}

function predpoklad_7_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 7;
  }
  if ($den == 7) {
    return 7;
  }
  return 8;
}

function predpoklad_8_TS303 ($timestamp) {
  return 9;
}

function predpoklad_9_TS303 ($timestamp) {
  return 10;
}

function predpoklad_10_TS303 ($timestamp) {
  return 11;
}

function predpoklad_11_TS303 ($timestamp) {
  return 12;
}

function predpoklad_12_TS303 ($timestamp) {
  return 1;
}

