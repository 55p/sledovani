<?php 
function predpoklad_1_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS871 ($timestamp) {
  return 4;
}

function predpoklad_4_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  return 5;
}

function predpoklad_5_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 6;
}

function predpoklad_6_TS871 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  if ($den == 7) {
    return 3;
  }
  return 1;
}

?>