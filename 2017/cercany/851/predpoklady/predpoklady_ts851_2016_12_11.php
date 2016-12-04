<?php 
function predpoklad_1_TS851 ($timestamp) {
  return 2;
}

function predpoklad_2_TS851 ($timestamp) {
  return 3;
}

function predpoklad_3_TS851 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS851 ($timestamp) {
  return 5;
}

function predpoklad_5_TS851 ($timestamp) {
  return 6;
}

function predpoklad_6_TS851 ($timestamp) {
  return 7;
}

function predpoklad_7_TS851 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  return 1;
}

