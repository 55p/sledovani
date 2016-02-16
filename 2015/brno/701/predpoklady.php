<?php
include 'predpoklady_ts702_2015_08_05.php';
include 'predpoklady_ts715_2015_09_02.php';

function predpoklad_1_TS701 ($timestamp) {  
  if (date("N", $timestamp) == 6)
    return 4;
  return 2;
}
function predpoklad_2_TS701 ($timestamp) {
  if (date("N", $timestamp) == 6)
    return 2;
  return 4;
}
function predpoklad_3_TS701 ($timestamp) {  
  return 3;
}
function predpoklad_4_TS701 ($timestamp) {
  return 5;
}
function predpoklad_5_TS701 ($timestamp) {  
  return 5;
}
/*
function predpoklad_1_TS702 ($timestamp) {
  if (date("N", $timestamp) > 5) {
    //v sobotu a v nedeli
    return 1;
  }
  return 2;
}
function predpoklad_2_TS702 ($timestamp) {  
  if (date("N", $timestamp) > 5) {
    //v sobotu a v nedeli
    return 2;
  }
  return 3;
}
function predpoklad_3_TS702 ($timestamp) {
  if (date("N", $timestamp) > 5) {
    //v sobotu a v nedeli
    return 3;
  }
  return 1;
}
*/
function predpoklad_1_TS703 ($timestamp) {  
  if (date("N", $timestamp) > 5) {
    //v sobotu a v nedeli
    return 1;
  }
  return 2;
}
function predpoklad_2_TS703 ($timestamp) {  
  if (date("N", $timestamp) > 5) {
    //v sobotu a v nedeli
    return 2;
  }
  return 1;
}
function predpoklad_1_TS704 ($timestamp) {
  return 1;
}
function predpoklad_1_TS706 ($timestamp) {
  if (date("N", $timestamp) >= 5) {
    return 1;
  }
  return null; 
}

?>
