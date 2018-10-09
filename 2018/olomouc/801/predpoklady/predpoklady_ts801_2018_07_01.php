<?php 
function predpoklad_1_TS801 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS801 ($timestamp) {
  return 3;
}

function predpoklad_3_TS801 ($timestamp) {
  return 4;
}

function predpoklad_4_TS801 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 5;
}

function predpoklad_5_TS801 ($timestamp) {
  return 6;
}

function predpoklad_6_TS801 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 6) {
    return 5;
  }
  return 7;
}

