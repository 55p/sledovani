<?php 
function predpoklad_1_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 2;
}

function predpoklad_2_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 10;
  }
  return 5;
}

function predpoklad_5_TS301 ($timestamp) {
  return 6;
}

function predpoklad_6_TS301 ($timestamp) {
  return 7;
}

function predpoklad_7_TS301 ($timestamp) {
  return null;
}

function predpoklad_8_TS301 ($timestamp) {
  return null;
}

function predpoklad_9_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 1;
  }
  return 10;
}

function predpoklad_10_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 15;
  }
  return 11;
}

function predpoklad_11_TS301 ($timestamp) {
  return 12;
}

function predpoklad_12_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 11;
  }
  return 13;
}

function predpoklad_13_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 13;
  }
  return 14;
}

function predpoklad_14_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 20;
  }
  return 15;
}

function predpoklad_15_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 14;
  }
  return 16;
}

function predpoklad_16_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 18;
  }
  return 17;
}

function predpoklad_17_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 17;
  }
  return 18;
}

function predpoklad_18_TS301 ($timestamp) {
  return 19;
}

function predpoklad_19_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 5;
  }
  return 20;
}

function predpoklad_20_TS301 ($timestamp) {
  return 21;
}

function predpoklad_21_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 20;
  }
  if ($den == 6) {
    return 16;
  }
  return 22;
}

function predpoklad_1a_TS301 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return '1a';
  }
  return null;
}


?>