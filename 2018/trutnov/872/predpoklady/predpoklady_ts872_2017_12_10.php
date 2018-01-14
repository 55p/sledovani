<?php 
function predpoklad_1_TS872 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 1;
  }
  if ($den == 2) {
    return 1;
  }
  if ($den == 4) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS872 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 2;
  }
  if ($den == 2) {
    return 2;
  }
  if ($den == 4) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 1;
}

