<?php 
function predpoklad_1_TS846 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS846 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 1;
}

