<?php 
function predpoklad_1_TS642 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 2) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS642 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 2) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 1;
}

