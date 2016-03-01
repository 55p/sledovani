<?php 
function predpoklad_1_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 1;
}

?>