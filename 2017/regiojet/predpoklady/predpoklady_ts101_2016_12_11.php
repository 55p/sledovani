<?php 
function predpoklad_1_TS101 ($timestamp) {
  return 2;
}

function predpoklad_2_TS101 ($timestamp) {
  return 3;
}

function predpoklad_3_TS101 ($timestamp) {
  return 4;
}

function predpoklad_4_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  return 5;
}

function predpoklad_5_TS101 ($timestamp) {
  return 6;
}

function predpoklad_6_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 4;
  }
  return 1;
}

