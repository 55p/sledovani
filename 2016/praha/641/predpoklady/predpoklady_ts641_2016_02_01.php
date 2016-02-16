<?php 
function predpoklad_1_TS641 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 2) {
    return 4;
  }
  if ($den == 6) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS641 ($timestamp) {
  return 3;
}

function predpoklad_3_TS641 ($timestamp) {
  return 1;
}

function predpoklad_4_TS641 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 2) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 4;
}

?>