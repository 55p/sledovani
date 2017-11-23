<?php 
function predpoklad_1_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 8;
  }
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 6) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 7;
  }
  if ($den == 5) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 6) {
    return 5;
  }
  return 6;
}

function predpoklad_6_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 6;
  }
  if ($den == 6) {
    return 6;
  }
  return 7;
}

function predpoklad_7_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  if ($den == 5) {
    return 7;
  }
  if ($den == 7) {
    return 2;
  }
  return 8;
}

function predpoklad_8_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 8;
  }
  if ($den == 6) {
    return 8;
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
  return 9;
}

function predpoklad_9_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 9;
  }
  if ($den == 2) {
    return 9;
  }
  if ($den == 3) {
    return 9;
  }
  if ($den == 4) {
    return 9;
  }
  if ($den == 5) {
    return 9;
  }
  if ($den == 6) {
    return 9;
  }
  return 10;
}

function predpoklad_10_TS121 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 1) {
    return 10;
  }
  if ($den == 2) {
    return 10;
  }
  if ($den == 3) {
    return 10;
  }
  if ($den == 4) {
    return 10;
  }
  if ($den == 5) {
    return 10;
  }
  if ($den == 6) {
    return 10;
  }
  return 1;
}

