<?php

function predpoklad_1_TS122($timestamp) {
  return 2;
}
function predpoklad_2_TS122($timestamp) {
  return 3;  
}
function predpoklad_3_TS122($timestamp) {
  return 4;
}
function predpoklad_4_TS122($timestamp) {
  return 4;
}
/*
function predpoklad_0_TS124($timestamp) {
  return 1;
}*/
function predpoklad_1_TS124($timestamp) {
  return 2;
}
function predpoklad_2_TS124($timestamp) {
  return 3;
}
function predpoklad_3_TS124($timestamp) {
  return 4;
}
function predpoklad_4_TS124($timestamp) {
  return 5;
}
function predpoklad_5_TS124($timestamp) {
  return 5;
}

/*
function predpoklad_1_TS123($timestamp) {
  if (date("N", $timestamp) >= 7) {
    return 2;
  } elseif (date("N", $timestamp) >= 5) {
    return 1;
  }
  
  return 2;
}
function predpoklad_2_TS123($timestamp) {
  return 3;
}
function predpoklad_3_TS123($timestamp) {
  if (date("N", $timestamp) >= 7) {
    return 3;
  } elseif (date("N", $timestamp) > 5) {
    return 3;
  }
  return 4;
}
function predpoklad_4_TS123($timestamp) {
  return 4;
}
*/
function predpoklad_1_TS123($timestamp) {
  return 2;
}
function predpoklad_2_TS123($timestamp) {
  return 1;
}
function predpoklad_3_TS123($timestamp) {
  if (date("N", $timestamp) >= 7) {
    return 3;
  } elseif (date("N", $timestamp) > 5) {
    return 3;
  }
  return 3;
}
function predpoklad_4_TS123($timestamp) {
  return 4;
}
?>
