<?php 
function predpoklad_1_TS856 ($timestamp) {
  return 2;
}

function predpoklad_2_TS856 ($timestamp) {
  $den = date('N', $timestamp);
  return 1;
}

function predpoklad_3_TS856 ($timestamp) {
  $den = date('N', $timestamp);
  return 3;
}

?>