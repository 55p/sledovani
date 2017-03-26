<?php 
function predpoklad_1_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS701 ($timestamp) {
  return 3;
}

function predpoklad_3_TS701 ($timestamp) {
  return 4;
}

function predpoklad_4_TS701 ($timestamp) {
  return 5;
}

function predpoklad_5_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 3;
  }
  return 6;
}

function predpoklad_6_TS701 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 6;
  }
  if ($den == 6) {
    return 6;
  }
  return 1;
}

