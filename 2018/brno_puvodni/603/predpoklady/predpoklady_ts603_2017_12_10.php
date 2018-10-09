<?php 
function predpoklad_1_TS603 ($timestamp) {
  return 2;
}

function predpoklad_2_TS603 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 6) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS603 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  if ($den == 5) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS603 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 5;
}

function predpoklad_5_TS603 ($timestamp) {
  return 1;
}

