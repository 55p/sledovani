<?php 
function predpoklad_1_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 2;
  }
  return 4;
}

function predpoklad_4_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 8;
  }
  return 5;
}

function predpoklad_5_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 10;
  }
  return 6;
}

function predpoklad_6_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 9;
  }
  return 7;
}

function predpoklad_7_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  return 8;
}

function predpoklad_8_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 5;
  }
  if ($den == 7) {
    return 7;
  }
  return 9;
}

function predpoklad_9_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 6;
  }
  return 10;
}

function predpoklad_10_TS101 ($timestamp) {
  return 11;
}

function predpoklad_11_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 13;
  }
  if ($den == 6) {
    return 13;
  }
  return 12;
}

function predpoklad_12_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 12;
  }
  if ($den == 6) {
    return 12;
  }
  return 13;
}

function predpoklad_13_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 15;
  }
  if ($den == 6) {
    return 15;
  }
  return 14;
}

function predpoklad_14_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 14;
  }
  if ($den == 6) {
    return 14;
  }
  return 15;
}

function predpoklad_15_TS101 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 1;
}

?>