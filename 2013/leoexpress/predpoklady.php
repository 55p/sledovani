<?php

function predpoklad_1($timestamp) {
  if (date("N", $timestamp) == 5) {
    return null;
  }
  if (date("N", $timestamp) == 6) {
    return "1a";
  }
  
  return 2;
}

function predpoklad_2($timestamp) {
  if (date("N", $timestamp) == 5) {
    //v patek
    return 2;
  }
  if (date("N", $timestamp) == 6) {
    //v sobotu
    return 2;
  }
  
  return 1;
}

function predpoklad_1a($timestamp) {
  return null;
}

function predpoklad_2a($timestamp) {
  return null;
}

function predpoklad_1b($timestamp) {
  return null;
}

?>
