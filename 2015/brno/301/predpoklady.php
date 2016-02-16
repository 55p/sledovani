<?php
function predpoklad_1_TS301 ($timestamp) {  
  return 1;
}

function predpoklad_1_TS302 ($timestamp) {
  if (date("N", $timestamp) == 5 || date("N", $timestamp) == 6) {
    //v patek, sobotu
    return 1;
  }
  return 2;
}
function predpoklad_2_TS302 ($timestamp) {  
  return 3;
}
function predpoklad_3_TS302 ($timestamp) {
  if (date("N", $timestamp) == 5 || date("N", $timestamp) == 6) {
    //v patek, sobotu a v nedeli
    return 2;
  }
  return 1;
}


function predpoklad_1_TS303 ($timestamp) {
  return 2;
}
function predpoklad_2_TS303 ($timestamp) {
  return 3;
}
function predpoklad_3_TS303 ($timestamp) {
  return 4;
}
function predpoklad_4_TS303 ($timestamp) {
  return 5;
}
function predpoklad_5_TS303 ($timestamp) {
  return 1;
}

?>
