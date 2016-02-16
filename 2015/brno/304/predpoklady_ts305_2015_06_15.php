<?php 

function predpoklad_1_TS305 ($timestamp) {
  return 2;
}
function predpoklad_2_TS305 ($timestamp) {
  if (date("N", $timestamp) == 7) {
    return 1;
  }
  return 3;
}
function predpoklad_3_TS305 ($timestamp) {
  if (date("N", $timestamp) == 7) {
    return 3;
  }
  return 4;
}
function predpoklad_4_TS305 ($timestamp) {
  if (date("N", $timestamp) == 7) {
    return 4;
  }
  return 1;
}

?>