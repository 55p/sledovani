<?php 
function predpoklad_1_TS301a ($timestamp) {
  return 2;
}

function predpoklad_2_TS301a ($timestamp) {
  return 3;
}

function predpoklad_3_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 5;
  }
  if ($den == 6) {
    return 6;
  }
  return 4;
}

function predpoklad_4_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 7;
  }
  return 5;
}

function predpoklad_5_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  if ($den == 7) {
    return 4;
  }
  return 6;
}

function predpoklad_6_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 6;
  }
  return 7;
}

function predpoklad_7_TS301a ($timestamp) {
  return 8;
}

function predpoklad_8_TS301a ($timestamp) {
  return 1;
}

