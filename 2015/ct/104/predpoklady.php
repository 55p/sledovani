<?php

function predpoklad_1_TS102 ($timestamp) {
  return 1;
}
function predpoklad_1_TS105 ($timestamp) {
  return 1;
}

//*
function predpoklad_1_TS104 ($timestamp) {
  return 2;
}
function predpoklad_2_TS104 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    return 4;
  }
  return 3;
}

function predpoklad_3_TS104 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    return 5;
  }
  if (date("N", $timestamp) == 6) {
    return 3;
  }
  return 4;
}

function predpoklad_4_TS104 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    return 4;
  }
  return 5;
}

function predpoklad_5_TS104 ($timestamp) {
  return 1;
}
// */
/*
function predpoklad_1_TS104 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    return 3;
  }
  if (date("N", $timestamp) == 7) {
    return 5;
  }
  return 2;
}
function predpoklad_2_TS104 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    return 4;
  }
  if (date("N", $timestamp) == 6) {
    return 1;
  }
  return 3;
}

function predpoklad_3_TS104 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    return 5;
  }
  return 4;
}

function predpoklad_4_TS104 ($timestamp) {
  if (date("N", $timestamp) == 5) {
    return 2;
  }
  if (date("N", $timestamp) == 7) {
    return 2;
  }
  return 5;
}

function predpoklad_5_TS104 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    return 3;
  }
  return 6;
}
function predpoklad_6_TS104 ($timestamp) {
  if (date("N", $timestamp) == 6) {
    return 6;
  }
  return 1;
}
//*/
?>
