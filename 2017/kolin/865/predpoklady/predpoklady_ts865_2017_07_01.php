<?php 
function predpoklad_1_TS865 ($timestamp) {
  return 2;
}

function predpoklad_2_TS865 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS865 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  return 1;
}

