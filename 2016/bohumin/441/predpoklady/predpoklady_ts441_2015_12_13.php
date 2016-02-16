<?php 
function predpoklad_1_TS441 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS441 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS441 ($timestamp) {
  return 4;
}

function predpoklad_4_TS441 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 5;
}

function predpoklad_5_TS441 ($timestamp) {
  return 6;
}

function predpoklad_6_TS441 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  if ($den == 7) {
    return 5;
  }
  return 1;
}

?>