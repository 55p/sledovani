<?php 
function predpoklad_1_TS145 ($timestamp) {
  return 2;
}

function predpoklad_2_TS145 ($timestamp) {
  return 3;
}

function predpoklad_3_TS145 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 8;
  }
  if ($den == 6) {
    return 8;
  }
  return 4;
}

function predpoklad_4_TS145 ($timestamp) {
  return 5;
}

function predpoklad_5_TS145 ($timestamp) {
  return 6;
}

function predpoklad_6_TS145 ($timestamp) {
  return 7;
}

function predpoklad_7_TS145 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 6) {
    return 4;
  }
  return 8;
}

function predpoklad_8_TS145 ($timestamp) {
  return 9;
}

function predpoklad_9_TS145 ($timestamp) {
  return 10;
}

function predpoklad_10_TS145 ($timestamp) {
  return 11;
}

function predpoklad_11_TS145 ($timestamp) {
  return 12;
}

function predpoklad_12_TS145 ($timestamp) {
  return 1;
}

