<?php 
function predpoklad_1_TS306 ($timestamp) {
  return 2;
}

function predpoklad_2_TS306 ($timestamp) {
  return 3;
}

function predpoklad_3_TS306 ($timestamp) {
  return 4;
}

function predpoklad_4_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 12;
  }
  if ($den == 7) {
    return 10;
  }
  return 5;
}

function predpoklad_5_TS306 ($timestamp) {
  return 6;
}

function predpoklad_6_TS306 ($timestamp) {
  return 7;
}

function predpoklad_7_TS306 ($timestamp) {
  return 8;
}

function predpoklad_8_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 5;
  }
  return 9;
}

function predpoklad_9_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 5;
  }
  return 10;
}

function predpoklad_10_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 9;
  }
  return 11;
}

function predpoklad_11_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 11;
  }
  return 12;
}

function predpoklad_12_TS306 ($timestamp) {
  return 13;
}

function predpoklad_13_TS306 ($timestamp) {
  return 14;
}

function predpoklad_14_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 16;
  }
  return 15;
}

function predpoklad_15_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 19;
  }
  return 16;
}

function predpoklad_16_TS306 ($timestamp) {
  return 17;
}

function predpoklad_17_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 15;
  }
  return 18;
}

function predpoklad_18_TS306 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 18;
  }
  return 19;
}

function predpoklad_19_TS306 ($timestamp) {
  return 1;
}

?>