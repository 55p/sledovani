<?php 
function predpoklad_1_TS866 ($timestamp) {
  return 2;
}

function predpoklad_2_TS866 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  if ($den == 7) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS866 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS866 ($timestamp) {
  return 1;
}

