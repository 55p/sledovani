<?php 
function predpoklad_1_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  return 4;
}

function predpoklad_4_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 5;
}

function predpoklad_5_TS304 ($timestamp) {
  return 6;
}

function predpoklad_6_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 7;
}

function predpoklad_7_TS304 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 7;
  }
  return 1;
}

?>