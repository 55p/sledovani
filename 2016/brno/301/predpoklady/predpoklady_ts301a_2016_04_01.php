<?php 
function predpoklad_1_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 1;
  }
  if ($den == 2) {
    return 1;
  }
  if ($den == 3) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS301a ($timestamp) {
  return 3;
}

function predpoklad_3_TS301a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 2;
  }
  if ($den == 2) {
    return 2;
  }
  if ($den == 3) {
    return 2;
  }
  return 1;
}

?>