<?php 
function predpoklad_1_TS327 ($timestamp) {
  return 2;
}

function predpoklad_2_TS327 ($timestamp) {
  return 3;
}

function predpoklad_3_TS327 ($timestamp) {
  $den = date('N', $timestamp);
  return 1;
}

function predpoklad_4_TS327 ($timestamp) {
  $den = date('N', $timestamp);
  return 0;
}

function predpoklad_5_TS327 ($timestamp) {
  $den = date('N', $timestamp);
  return 5;
}

