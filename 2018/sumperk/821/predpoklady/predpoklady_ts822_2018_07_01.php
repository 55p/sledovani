<?php 
function predpoklad_1_TS822 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS822 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 1;
}

