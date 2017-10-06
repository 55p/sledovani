<?php 
function predpoklad_1_TS890a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS890a ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS890a ($timestamp) {
  return 4;
}

function predpoklad_4_TS890a ($timestamp) {
  return 5;
}

function predpoklad_5_TS890a ($timestamp) {
  return 6;
}

function predpoklad_6_TS890a ($timestamp) {
  return 1;
}

