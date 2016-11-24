<?php 
function predpoklad_1_TS421 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS421 ($timestamp) {
  return 3;
}

function predpoklad_3_TS421 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS421 ($timestamp) {
  return 5;
}

function predpoklad_5_TS421 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 6;
}

function predpoklad_6_TS421 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  return 1;
}

?>