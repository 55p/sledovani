<?php 
function predpoklad_1_TS840a ($timestamp) {
  return 2;
}

function predpoklad_2_TS840a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS840a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 1;
}

