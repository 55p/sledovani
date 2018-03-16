<?php 
function predpoklad_1_TS849 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 3;
  }
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS849 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS849 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS849 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 1;
}

?>