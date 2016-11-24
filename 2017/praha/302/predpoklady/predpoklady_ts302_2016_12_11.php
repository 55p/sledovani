<?php 
function predpoklad_1_TS302 ($timestamp) {
  return 2;
}

function predpoklad_2_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  return 1;
}

function predpoklad_3_TS302 ($timestamp) {
  $den = date('N', $timestamp);
  return 3;
}

?>