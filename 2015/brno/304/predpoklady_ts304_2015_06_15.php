<?php 
function predpoklad_1_TS304 ($timestamp) {
  return 2;
}

function predpoklad_2_TS304 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS304 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 3;
  }
  if ($den == 7) {
    return 8;
  }
  return 4;
}

function predpoklad_4_TS304 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 7;
  }
  return 5;
}

function predpoklad_5_TS304 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 12;
  }
  return 6;
}

function predpoklad_6_TS304 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 6;
  }
  return 7;
}

function predpoklad_7_TS304 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 5) {
    return 12;
  }
  if ($den == 7) {
    return 4;
  }
  return 8;
}

function predpoklad_8_TS304 ($timestamp) {
  return 9;
}

function predpoklad_9_TS304 ($timestamp) {
  return 10;
}

function predpoklad_10_TS304 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 6) {
    return 5;
  }
  return 11;
}

function predpoklad_11_TS304 ($timestamp) {
  $den = date("N", $timestamp);
  if ($den == 5) {
    return 8;
  }
  if ($den == 6) {
    return 11;
  }
  return 12;
}

function predpoklad_12_TS304 ($timestamp) {
  return 1;
}

?>