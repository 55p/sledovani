<?php

if (date("n") > 6) {
  include "predpoklady_ts121_2015_06_30.php";
} else {

function predpoklad_1_TS121($timestamp) {
  /*
  if (date("N", $timestamp) == 5 || date("N", $timestamp) == 6) {
    //v patek a sobotu
    return 1;
  }
  */
  if (date("N", $timestamp) == 7) {
    //v nedeli
    return 5;
  }
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 6;
  }
  return 2;
}
function predpoklad_2_TS121($timestamp) {
  /*
  if (date("N", $timestamp) == 5 || date("N", $timestamp) == 6) {
    //v patek a sobotu
    return 2;
  }
  */
  if (date("N", $timestamp) == 7) {
    //v nedeli
    return 6;
  }
  return 3;  
}
function predpoklad_3_TS121($timestamp) {
  
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 2;
  }
  if (date("N", $timestamp) == 7) {
    //v nedeli
    return 3;
  }
  
  return 4;
}
function predpoklad_4_TS121($timestamp) {
  
  if (date("N", $timestamp) == 6 || date("N", $timestamp) == 7) {
    //v patek a sobotu
    return 4;
  }
  
  return 5;
}

function predpoklad_5_TS121($timestamp) {
  if (date("N", $timestamp) == 6) {
    //v patek a sobotu
    return 5;
  }
  if (date("N", $timestamp) == 7) {
    //v patek a sobotu
    return 2;
  }
  /*
  if (date("N", $timestamp) < 5) {
    //v po az ct
    return 4;
  }
  if (date("N", $timestamp) == 5) {
    //v patek
    return 5;
  }
  if (date("N", $timestamp) == 7) {
    //v patek
    return 4;
  }*/
  
  return 6;
}
function predpoklad_6_TS121($timestamp) {
  /*
  if (date("N", $timestamp) == 5) {
    //v patek
    return 6;
  }
  if (date("N", $timestamp) == 6) {
    //v patek
    return 5;
  }
  */
  return 1;
}


function predpoklad_7_TS127($timestamp) {
  return 7;
}
}
?>
