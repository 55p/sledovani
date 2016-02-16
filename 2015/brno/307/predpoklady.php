<?php

function predpoklad_1_TS307 ($timestamp) {  
if (date("N", $timestamp) == 7) {
    //v patek, sobotu a v nedeli
    return null;
  }
  return 1;
}


function predpoklad_1_TS308 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 2;
}

function predpoklad_2_TS308 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 5) {
    return 2;
  }
  if ($den == 7) {
    return 2;
  }
  return 3;
}

function predpoklad_3_TS308 ($timestamp) {
  return 1;
}

/*
function predpoklad_1_TS308 ($timestamp) {
  if (je25(date("j.n.Y", $timestamp))) {
  	return 2;
  }
  return 1;
}
function predpoklad_2_TS308 ($timestamp) {  
  if (je25(date("j.n.Y", $timestamp))) {
  	return 1;
  }
  return 2;
}
function predpoklad_1a_TS308 ($timestamp) {
  return "1a";
}
*/

function predpoklad_1_TS309 ($timestamp) {
  return 1;
}
function predpoklad_1a_TS309 ($timestamp) {
  return "1a";
}
function predpoklad_1b_TS309 ($timestamp) {
  return "1b";
}

?>
