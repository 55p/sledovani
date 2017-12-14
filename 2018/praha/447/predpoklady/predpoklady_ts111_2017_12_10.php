<?php 
function predpoklad_1_TS111 ($timestamp) {
  return 1;
}

function predpoklad_2_TS111 ($timestamp) {
  $den = date('N', $timestamp);
  return 2;
}

function predpoklad_3_TS111 ($timestamp) {
  $den = date('N', $timestamp);
  return 3;
}

