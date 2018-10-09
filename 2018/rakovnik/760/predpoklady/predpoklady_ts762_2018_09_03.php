<?php 
function predpoklad_1_TS762 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  return 2;
}

function predpoklad_2_TS762 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  return 3;
}

function predpoklad_3_TS762 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  return 1;
}

