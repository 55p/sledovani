<?php 
function predpoklad_1_GWTR ($timestamp) {
  return 2;
}

function predpoklad_2_GWTR ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  return 3;
}

function predpoklad_3_GWTR ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 3;
  }
  return 4;
}

function predpoklad_4_GWTR ($timestamp) {
  if ($den == 7) {
    return 4;
  }
  return 1;
}

