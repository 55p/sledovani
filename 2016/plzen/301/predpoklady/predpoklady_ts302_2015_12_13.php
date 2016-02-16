<?php 
function predpoklad_1_TS302 ($timestamp) {
  return 2;
}

function predpoklad_2_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS302 ($timestamp) {
  return 4;
}

function predpoklad_4_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  return 6;
}

function predpoklad_5_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  return 5;
}

function predpoklad_6_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 6) {
    return 4;
  }
  return 7;
}

function predpoklad_7_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 7;
  }
  if ($den == 6) {
    return 7;
  }
  return 1;
}

?>