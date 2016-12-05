<?php 
function predpoklad_1_TS301 ($timestamp) {
  return 2;
}

function predpoklad_2_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  return 1;
}

function predpoklad_3_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  return 3;
}

