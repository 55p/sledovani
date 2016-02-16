<?php
function predpoklad_1_TS301($timestamp) {
  return 2;
}
function predpoklad_2_TS301($timestamp) {
  return 3;
}
function predpoklad_3_TS301($timestamp) {
  return 4;
}
function predpoklad_4_TS301($timestamp) {
  return 5;
}
function predpoklad_5_TS301($timestamp) {
  return 1;
}


function predpoklad_1_TS304($timestamp) {
  return 2;
}
function predpoklad_2_TS304($timestamp) {
  return 3;
}
function predpoklad_3_TS304($timestamp) {
  return 1;
}


function predpoklad_1_TS310 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 1;
  }
  if ($den == 6) {
    return 1;
  }
  if ($den == 7) {
    return 1;
  }
  return 2;
}

function predpoklad_2_TS310 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 6) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 1;
}
?>
