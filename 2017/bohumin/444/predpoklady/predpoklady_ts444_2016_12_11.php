<?php 
function predpoklad_1_TS444 ($timestamp) {
  return 2;
}

function predpoklad_2_TS444 ($timestamp) {
  $den = date('N', $timestamp);
  return 1;
}

function predpoklad_3_TS444 ($timestamp) {
  $den = date('N', $timestamp);
  return 3;
}

