<?php 
function predpoklad_1_TS841 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS841 ($timestamp) {
  return 3;
}

function predpoklad_3_TS841 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS841 ($timestamp) {
  return 5;
}

function predpoklad_5_TS841 ($timestamp) {
  return 6;
}

function predpoklad_6_TS841 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 4;
  }
  return 1;
}

?>