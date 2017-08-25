<?php 
function predpoklad_1_TS443 ($timestamp) {
  return 2;
}

function predpoklad_2_TS443 ($timestamp) {
  return 3;
}

function predpoklad_3_TS443 ($timestamp) {
  return 4;
}

function predpoklad_4_TS443 ($timestamp) {
  return 5;
}

function predpoklad_5_TS443 ($timestamp) {
  return 6;
}

function predpoklad_6_TS443 ($timestamp) {
  return 7;
}

function predpoklad_7_TS443 ($timestamp) {
  return 8;
}

function predpoklad_8_TS443 ($timestamp) {
  return 9;
}

function predpoklad_9_TS443 ($timestamp) {
  return 10;
}

function predpoklad_10_TS443 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  return 11;
}

function predpoklad_11_TS443 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  return 1;
}

