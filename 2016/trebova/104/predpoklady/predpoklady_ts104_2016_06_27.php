<?php 
function predpoklad_1_TS104 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 6;
  }
  return 2;
}

function predpoklad_2_TS104 ($timestamp) {
  return 3;
}

function predpoklad_3_TS104 ($timestamp) {
  return 4;
}

function predpoklad_4_TS104 ($timestamp) {
  return 5;
}

function predpoklad_5_TS104 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  return 6;
}

function predpoklad_6_TS104 ($timestamp) {
  return 7;
}

?>