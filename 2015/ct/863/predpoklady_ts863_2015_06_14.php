<?php 

function predpoklad_1_TS863 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 2;
}


function predpoklad_2_TS863 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 3;
}


function predpoklad_3_TS863 ($timestamp) {
  return 4;
}


function predpoklad_4_TS863 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 5) {
    return 2;
  }
  return 1;
}


?>