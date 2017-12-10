<?php 
function predpoklad_1_TS721 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS721 ($timestamp) {
  return 3;
}

function predpoklad_3_TS721 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 4;
}

function predpoklad_4_TS721 ($timestamp) {
  $den = date('N', $timestamp);
  return 4;
}

