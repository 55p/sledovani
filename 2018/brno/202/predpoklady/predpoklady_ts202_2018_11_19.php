<?php 
function predpoklad_1_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 6) {
    return 1;
  }
  return 4;
}

function predpoklad_4_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 6) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 8;
  }
  return 6;
}

function predpoklad_6_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 6;
  }
  if ($den == 6) {
    return 5;
  }
  return 7;
}

function predpoklad_7_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 7;
  }
  if ($den == 5) {
    return 8;
  }
  return 8;
}

function predpoklad_8_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 11;
  }
  if ($den == 6) {
    return 6;
  }
  return 9;
}

function predpoklad_9_TS202 ($timestamp) {
  return 10;
}

function predpoklad_10_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  return 11;
}

function predpoklad_11_TS202 ($timestamp) {
  return 12;
}

function predpoklad_12_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 11;
  }
  return 13;
}

function predpoklad_13_TS202 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 0;
  }
  if ($den == 6) {
    return 13;
  }
  return 14;
}

