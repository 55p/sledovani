<?php

function predpoklad_1_TS140 ($timestamp) {  
  return 2;
}
function predpoklad_2_TS140 ($timestamp) {
  return 3;
}
function predpoklad_3_TS140 ($timestamp) {
  return 4;
}
function predpoklad_4_TS140 ($timestamp) {
  return 5;
}
function predpoklad_5_TS140 ($timestamp) {  
  return 6;
}
function predpoklad_6_TS140 ($timestamp) {
  return 7;
}
function predpoklad_7_TS140 ($timestamp) {  
  return 8;
}
function predpoklad_8_TS140 ($timestamp) {
  return 9;
}
function predpoklad_9_TS140 ($timestamp) {  
  return 10;
}
function predpoklad_10_TS140 ($timestamp) {  
  return 1;
}
/*
function predpoklad_1_TS141 ($timestamp) {
  return 1;
}
*/
function predpoklad_1_TS142 ($timestamp) {
  if (date("N", $timestamp) >= 5) {
    return 1;
  }
  return null; 
}

function predpoklad_1_TS642 ($timestamp) {  
  return 1;
}
?>
