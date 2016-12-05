<?php 
function predpoklad_1_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS305 ($timestamp) {
  return 4;
}

function predpoklad_4_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 8;
  }
  if ($den == 7) {
    return 6;
  }
  return 5;
}

function predpoklad_5_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  if ($den == 7) {
    return 5;
  }
  return 6;
}

function predpoklad_6_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  if ($den == 5) {
    return 8;
  }
  return 7;
}

function predpoklad_7_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 7;
  }
  if ($den == 6) {
    return 7;
  }
  return 8;
}

function predpoklad_8_TS305 ($timestamp) {
  return 9;
}

function predpoklad_9_TS305 ($timestamp) {
  return 10;
}

function predpoklad_10_TS305 ($timestamp) {
  return 11;
}

function predpoklad_11_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 14;
  }
  if ($den == 7) {
    return 14;
  }
  return 12;
}

function predpoklad_12_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 12;
  }
  return 13;
}

function predpoklad_13_TS305 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 12;
  }
  if ($den == 6) {
    return 13;
  }
  return 14;
}

function predpoklad_14_TS305 ($timestamp) {
  return 15;
}

function predpoklad_15_TS305 ($timestamp) {
  return 16;
}

function predpoklad_16_TS305 ($timestamp) {
  return 1;
}

