<?php 
function predpoklad_1_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 4;
  }
  if ($den == 6) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 5) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS303 ($timestamp) {
  return 5;
}

function predpoklad_5_TS303 ($timestamp) {
  return 6;
}

function predpoklad_6_TS303 ($timestamp) {
  return 7;
}

function predpoklad_7_TS303 ($timestamp) {
  return 8;
}

function predpoklad_8_TS303 ($timestamp) {
  return 9;
}

function predpoklad_9_TS303 ($timestamp) {
  return 10;
}

function predpoklad_10_TS303 ($timestamp) {
  return 11;
}

function predpoklad_11_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 14;
  }
  if ($den == 6) {
    return 14;
  }
  if ($den == 7) {
    return 14;
  }
  return 12;
}

function predpoklad_12_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 12;
  }
  if ($den == 7) {
    return 12;
  }
  return 13;
}

function predpoklad_13_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 13;
  }
  if ($den == 7) {
    return 13;
  }
  if ($den == 5) {
    return 12;
  }
  return 14;
}

function predpoklad_14_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 15;
}

function predpoklad_15_TS303 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 15;
  }
  return 1;
}

?>