<?php 
function predpoklad_1_TS304 ($timestamp) {
  return 2;
}

function predpoklad_2_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 1;
  }
  if ($den == 2) {
    return 1;
  }
  if ($den == 3) {
    return 1;
  }
  if ($den == 4) {
    return 1;
  }
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS304 ($timestamp) {
  return 4;
}

function predpoklad_4_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 3;
  }
  if ($den == 2) {
    return 3;
  }
  if ($den == 3) {
    return 3;
  }
  if ($den == 4) {
    return 3;
  }
  if ($den == 5) {
    return 3;
  }
  if ($den == 6) {
    return 3;
  }
  return 1;
}

