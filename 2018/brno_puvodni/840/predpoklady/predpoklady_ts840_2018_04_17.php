<?php 
function predpoklad_1_TS840 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS840 ($timestamp) {
  return 3;
}

function predpoklad_3_TS840 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS840 ($timestamp) {
  return 5;
}

function predpoklad_5_TS840 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  if ($den == 5) {
    return 2;
  }
  return 6;
}

function predpoklad_6_TS840 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  if ($den == 5) {
    return 6;
  }
  if ($den == 7) {
    return 6;
  }
  if ($den == 1) {
    return 1;
  }
  if ($den == 2) {
    return 1;
  }
  if ($den == 3) {
    return 1;
  }
  if ($den == 4) {
    return 1;
  }
  return 1;
}

