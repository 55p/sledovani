<?php 
function predpoklad_1_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
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
  return 1;
}

function predpoklad_5_TS101 ($timestamp) {
  return 6;
}

function predpoklad_6_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  return 5;
}

?>